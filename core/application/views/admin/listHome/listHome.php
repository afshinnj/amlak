<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#tab1" data-toggle="tab">املاک سپرده شده</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active dir-rtl" id="tab1">
    <table class="table table-striped">
    	<thead>
        	<tr>
            	<th><p class="pull-right">کد ملک</p></th>
            	<th><p class="pull-right">تاریخ</p></th>
                <th><p class="pull-right">ثبت کننده</p></th>
                <th><p class="pull-right">تلفن تماس</p></th>
                <th class="span2"><p class="pull-right">فعال</p></th> 
                <th class="span2"><p class="pull-right">حذف</p></th> 
            </tr>
        </thead>
        <?php foreach($data as $row):?>
        	<?php
				$result = $this->model_site_user->get_by(array('id'=>$row->id_User));
			   foreach ($result as $rows){
				   $username = $rows->userName;
				   $tell = $rows->mobileTell;
				}
			?>
			   <tr>
                    <td><p class="pull-right dir-rtl"><?php echo anchor('details/'.$row->id,$row->code_melk,'target="new" ') ;?></p></td>
                    <td><p class="pull-right dir-rtl"><?php echo $row->save_date;?></p></td>
                    <td><p class="pull-right dir-rtl"><?php echo $username;?></p></td>
                    <td><p class="pull-right dir-rtl"><?php echo $tell;?></p></td>
                    <?php if($row->active == 0):?>
                    	<td><p class="pull-right"><?php echo btn_uncheck('admin/listHome/check/'.$row->id)?></p></td>
                    <?php else :?>
                   	 	<td><p class="pull-right"><?php echo btn_check('admin/listHome/uncheck/'.$row->id)?></p></td>
                    <?php endif ?>
                    <td><p class="pull-right"><?php echo btn_delete('admin/listHome/delete/'.$row->id)?></p></td>
                </tr>
        <?php endforeach?>
    </table>
    </div><!--tab1-->
  </div><!--tab-content-->
</div><!--tabbable-->
    
        </div>
    </div>
</body>
</html>
