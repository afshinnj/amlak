<script type="text/javascript" src="<?php echo site_url('assets/site/js/saveCart.js')?>"></script>
<style>
hr{
	border:1px dotted #CCC;
	}	
.login{
	border:1px solid #A48CB6;
	width:100%;
	min-height:400px;
	background:#FFF;
	}
.title{
	border-bottom:1px solid #A48CB6;
	height:30px;
	padding-right:20px;
	line-height:30px;
	background-color:#CCC;
	}

input[type="text"], input[type="password"]{
	text-align:right;
	border:1px solid #CCC;
	}
.control{
	width:200px;
	float:right;
	}	
.row{
	margin:5px 10px 5px 10px;
	border:1px solid #CCC;
	height:25px;
	line-height:30px;
	padding-right:20px;
	background-color:#DDD;
	}
.row a{
	text-decoration:none;
	}	
.body{
	margin:5px 0px 20px 10px;
	width:720px;
	float:left;
	}
.mastermain{
	
	min-height:400px !important;
	}	
.footer{
	top:15px !important;
	}
.footer_details{
	text-align:center;
	top:10px !important;
	line-height:30px;
	}	
legend{
	border:1px solid #CCC;
	border-radius:5px;
	padding:5px;
	}									
</style>
<script>

</script>
<div class="mastermain">
    <div class="login">
    	<div class="title"><strong>حساب کاربری</strong></div>
		<div class='control'>
        	<div class="row"><a href="<?php echo site_url('profile')?>">حساب کاربری</a></div>
        	<div class="row"><a href="<?php echo site_url('register_home')?>">ثبت ملک</a></div>
            <div class="row"><a href="<?php echo site_url('dht')?>">درخواست ملک</a></div>
            <div class="row"><a href="<?php echo site_url('adver')?>">آگهی ویژه</a></div>
            <div class="row"><a href="<?php echo site_url('change')?>">تغییر رمز عبور</a></div>
            <div class="row"><a href="<?php echo site_url('changeProfile')?>">تغییر مشخصات</a> </div>
            <div class="row"><a href="<?php echo site_url('user/profile/logout')?>">خروج</a></div>
        </div>
        
        <div class="body">
        <fieldset>
        	<legend><strong>پرداخت</strong></legend>
            <div><strong>پرداخت هزینه آگهی </strong></div>
            <hr />
            <div style="direction:rtl; line-height:20px;">
            توجه داشته باشيد که براي انجام پرداخت اينترنتي شما مي توانيد از تمامي کارت هاي عضو شبکه شتاب  .<br />
             مانند کارت هاي اقتصاد نوين ، پاسارگاد ، صادرات ، کشاورزي ، ملت ، ملي ، سامان و ... استفاده نماييد.<br />
انجام مراحل پرداخت در وب سایت <font color="#0066FF"><strong>بانک ملت</strong></font> صورت می گیرد و پس از انجام عمليات مجددا به این صفحه باز خواهید گشت.
            </div>
            <hr />
             <div style="margin-bottom:10px; border-radius:5px;">
                	<div style="width:400px; float:right; padding:10px;">
                    	<strong>مشخصات پرداخت</strong>
                      	<table dir="rtl" cellspacing="10">
                        	<tr>
                            	<td><strong>نام پرداخت کننده : <?php echo $userName;?></strong></td>
                                <td></td>
                            </tr>
                            <tr>
                            	<td><strong>مبلغ پرداخت : <?php echo $mablag;?></strong></td>
                                <td></td>
                            </tr>
                            <tr>
                            	<td><strong>موضوع پرداخت : <?php echo $desc;?></strong></td>
                                <td></td>
                            </tr>
                        </table> 
                      </div>
                    <div style="clear:both"></div>
                </div><!--formPardakht-->
            <hr />
            <div style="margin-bottom:20px">
            	<strong>برای پرداخت میتوانید یکی از روش های زیر را انتخاب کنید .</strong>
            </div>   
            <div>
                <input type="radio" name="ad" value="1"  id="bank"/> : پرداخت اینترنتی
                <input type="radio" name="ad" value="2"  id="cart"/> : کارت به کارت 
                <div id="formPardakht" style="border:1px solid #CCC; margin-top:10px; margin-bottom:10px; border-radius:5px; display:none">
					<center>
                	<img src="<?php echo base_url('assets/site/img/logo_melat.png')?>"  />
                    <br /><br />
                    <?php echo form_open('advertisement/mellat');?>
                    	<input type="hidden" value="<?php echo $mablag1;?>" name="pric"/>
                    	<!--<input type="submit" value="پرداخت آنلاین" />-->
                    <?php echo form_close()?>
                    </center>
                    <div style="clear:both"></div>
                </div><!--formPardakht-->
                
                <div id="cartbcart" style="border:1px solid #CCC; margin-top:10px; margin-bottom:10px; border-radius:5px; display:none">
                <?php echo form_open('advertisement/'.$cart.'','id="form"')?>
                <input type="hidden" value="<?php echo $idAds; ?>" name="idAds" />
                <input type="hidden" value="<?php echo $code;?>" name="code" />
                <input type="hidden" value="<?php echo $agahi;?>" name="agahi" />
                <table border="0" align="center">
                	<tr>
                    	<td align="left">
                        	شماره پرداخت :
                          </td>
                          <td>
                       	 <input type="text" name="TrackingNumber" id="TrackingNumber" />
                        </td>
                        <td>
                        	نام پرداخت کننده :
                         </td>
                          <td>
                        	<input type="text" name="PayerName" id="PayerName" />
                         </td>
                    </tr>
                    <tr>
                    	<td align="left">
                        	تاریخ پرداخت :
                         </td>
                          <td>
                        	<input type="text" id='datepicker' name="Dateofpayment" />
                        </td>
                        <td align="left">
                        	مبلغ پرداخت :
                        </td>
                          <td>
                        	<input type="text" onkeyup="format(this)" id="price" name="Theamountpaid" />
                        </td>
                    </tr>
                    <tr>
                    	<td></td>
                        <td align="left"><input id="saveCart" type="button" value="ثبت"/></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <?php echo form_close()?>
                </div>
                
                
            </div>
        </fieldset>
        
        </div><!--body-->
<div style="clear:both"></div>
    </div>

</div>

