<?php

class mellat  
{
    const terminalID = '855242';
    const username = 'vitrina';
    const password = 'vi54ri79';
    

    
    
    
        public $SaleReferenceId = '';

        /**

    *     method send request to bank and get authority!
    *
    * @param $price int , toman تومان
    * @param $order_id int , unique id
    * @param $callback string , callback site
    * @return object , au: authority , go: bank link payment , status: the status of connection!
    **/
    public function request($price = NULL , $order_id = NULL , $callback = NULL)
    {
        $parameters = array(
                'terminalId' => self::terminalID ,
                'userName' => self::username ,
                'userPassword' => self::password ,
                'orderId' => $order_id+5400 ,
                'amount' => $price * 10 ,
                'localDate' => date("Ymd") ,
                'localTime' => date("His") ,
                'additionalData' => '' ,
                'callBackUrl' => $callback ,
                'payerId' => '0' ,
        );
            $client = new nusoap_client('https://pgws.bpm.bankmellat.ir/pgwchannel/services/pgw');
            $err = $client->getError();
            if($err)
                return -6;;

                
            $result = $client->call('bpPayRequest', $parameters, 'http://interfaces.core.sw.bps.com/');
            //print_r($result);
            $res = explode (',', $result);
            if( ! isset($res[0]) or $res[0] != "0" or ! isset($res[1]))
                return -6;

            else
            {
                return strip_tags($res[1]);


            }

            
        return -6;
    }
    
    


        /**
    * method to check verify transaction
    *
    * @param $price int , تومان
    * @param $order_id int , unique order id 
    * @param $au string , authority code
    * @return bool true/false 
    **/
    public function verify($price = NULL ,$order_id = NULL , $au = NULL)
    {

        //print_r($_POST);
            $RefId = @$_POST['RefId']; // notNeed
            $ResCode = @$_POST['ResCode'];
            $SaleOrderId = (int) @$_POST['SaleOrderId'];
            $SaleReferenceId = @$_POST['SaleReferenceId'];
            //Logs::model()->add('SaleReferenceId',$SaleReferenceId .'-'.$RefId);
            
                        $this->SaleReferenceId = $SaleReferenceId;
                        /**/
            //check
            if($SaleOrderId != $order_id+5400 or $RefId!=$au or ! isset($_POST['ResCode']))
            {
                Logs::model()->add('برگشت بانک ملت','خطا : ورودی نامعتبر است !');
                return false;
            }
                
            /*if($ResCode !=0)
                return false;*/
                #Logs::model()->add('برگشت بانک ملت','خطا : پرداخت انجام نشد .');
            
            $client = new nusoap_client('https://pgws.bpm.bankmellat.ir/pgwchannel/services/pgw');
            $err = $client->getError();
            if ($err) 
            {
                Logs::model()->add('برگشت بانک ملت',"_خطا : " . strip_tags($err) );
                return false;
            }

                  
            $parameters = array(
                    'terminalId' => self::terminalID ,
                    'userName' => self::username ,
                    'userPassword' => self::password ,
                    'orderId' => $SaleOrderId ,
                    'saleOrderId' => $SaleOrderId ,
                    'saleReferenceId' => $SaleReferenceId
                    );

                // Call the SOAP method
                $result = $client->call('bpVerifyRequest', $parameters,'http://interfaces.core.sw.bps.com/');

                // Check for a fault
                if ($client->fault) 
                    Logs::model()->add('برگشت بانک ملت','_خطا در اتصال به بانک .');

                
                $err = $client->getError();
                if ($err) 
                {
                    Logs::model()->add('برگشت بانک ملت',"__خطا : " . strip_tags($err) );
                    return false;
                }

                
                if(isset($result) and $result==0)
                {
                    //settel
                    $result = $client->call('bpSettleRequest', $parameters,'http://interfaces.core.sw.bps.com/');
                    if ($client->fault) 
                    {
                    Logs::model()->add('برگشت بانک ملت','خطا در اتصال به بانک .');
                        return false;
                    }

                
                $err = $client->getError();
                if ($err) 
                {
                    Logs::model()->add('برگشت بانک ملت',"خطا : " . strip_tags($err) );
                    return false;
                }

                
                    if(isset($result) and $result==0)
                    {
                        return true;    
                    }
                }
                return false;
    }
    
    
    /* go to bank by au */
    public function go2bank($id='')
    {
        ?>
<html>
<head>
<body>
<script src="<?php echo site_url('assets/admin/js/jquery-1.8.2.js');?>" language="javascript" type="text/javascript"></script>
<script language='javascript' type='text/javascript'>postRefId('<?php echo $id; ?>');</script>
<script type="text/javascript"><!--

$(document).ready(function()
{
    confirmSubmit();
});

function postRefId (refIdValue) {
    var form = document.createElement("form");
    form.setAttribute("method", "POST");
    form.setAttribute("action", "https://pgw.bpm.bankmellat.ir/pgwchannel/startpay.mellat");
    form.setAttribute("target", "_self");
    var hiddenField = document.createElement("input");              
    hiddenField.setAttribute("name", "RefId");
    hiddenField.setAttribute("value", refIdValue);
    form.appendChild(hiddenField);
    document.body.appendChild(form);         
    form.submit();
    document.body.removeChild(form);
}
function confirmSubmit() {
    postRefId('<?php echo $id; ?>');
    return false;            
}
//--></script>
</body></html>
             <?php
             die;
    }
}