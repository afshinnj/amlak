<h4 class="text-right">لیست آگهی</h4>
	<table class="table table-striped dir-rtl">
    	<thead>
        	<tr>
            	<th  class="span2"><p class="pull-right">ثبت کننده</p></th>
                <th class="span2"><p class="pull-right">کد ملک</p></th>
                <th class="span2" ><p class="pull-right">نوع پرداخت</p></th>
                <th class="span2" ><p class="pull-right">شماره پرداخت</p></th>
                <th class="span2" ><p class="pull-right">مبلغ واریزی</p></th>
                <th class="span3" ><p class="pull-right">نوع آگهی</p></th>
                <th class="span1" ><p class="pull-right">فعال</p></th>
                <th class="span1" ><p class="pull-right">حذف</p></th>
            </tr>
        </thead>
        <?php foreach($get_ads as $row):?> 
        	<?php $result = $this->model_site_user->get_by(array('id'=>$row->id_user));
					foreach($result as $rows){
						$name = $rows->userName;
						}
				$cart = $this->model_cart->get_by(array('code_melk'=>$row->code_melk));
				foreach($cart as $cartRow){
					$TNumber = $cartRow->TNumber;
					$Theamountpaid = $cartRow->Theamountpaid;
					}
				if($cart){
					$noePardakht = 'کارت به کارت';
					}
					
				if($row->ads_type == 1 ){
					$ads_type = 'آگهی شماره 1';
					}
				if($row->ads_type == 2){
					$ads_type = 'آگهی شماره 2';
					}			
			?>
        <tr>
        	<td><p class="pull-right"><?php echo $name;?></p></td>
            <td><p class="pull-right"><?php echo $row->code_melk;?></p></td>
            <td><p class="pull-right"><?php echo $noePardakht;?></p></td>
            <td><p class="pull-right"><?php echo $TNumber;?></p></td>
            <td><p class="pull-right"><?php echo $Theamountpaid;?></p></td>
            <td><p class="pull-right"><?php echo $ads_type;?></p></td>
            <?php if($row->active == 1):?>
             	<td><p class="pull-right"><?php echo btn_check('admin/advertisement/dactive/'.$row->id);?></p></td>
            <?php else:?>
            	<td><p class="pull-right"><?php echo btn_uncheck('admin/advertisement/active/'.$row->id);?></p></td>
            <?php endif?>
            <td><p class="pull-right"><?php echo btn_delete('admin/advertisement/delete/'.$row->id);?></p></td>
        </tr>
        <?php endforeach ?>
    </table>



        </div>
    </div>
</body>
</html>
