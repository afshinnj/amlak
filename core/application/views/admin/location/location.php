<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#tab1" data-toggle="tab">ثبت استان</a></li>
    <li class="pull-right"><a href="#tab2" data-toggle="tab">ثبت شهرستان</a></li>
    <li class="pull-right"><a href="#tab3" data-toggle="tab">ثبت منطقه</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active dir-rtl" id="tab1">
    	<?php echo form_open('admin/location/ostan');?>
		<ul class="unstyled inline">
        	<li><p>نام استان :</p></li>
        	<li><input type="text" name="ostan" ></li>
            <li><span class="label label-warning"><?php echo form_error('ostan');?></span></li>
            <li><button type="submit" class="btn btn-primary">ذخیره</button></li>
        </ul>
       
       <table class="table table-striped dir-rtl">
       		<thead>
            	<tr>
                	<th><p class="pull-right">نام</p></th>
                    <th class="span2"><p class="pull-right">ویرایش</p></th>
                    <th class="span2"><p class="pull-right">حذف</p></th>
                </tr>
            </thead>
            <?php foreach($ostan as $row):?>
            <tr>
            	<td><p class="pull-right"><?php echo $row->name?></p></td>
                <th class="span2"><p class="pull-right"><?php echo btn_edit('admin/location/edit_ostan/'.$row->id);?></p></th>
                <th class="span2"><p class="pull-right"><?php echo btn_delete('admin/location/delete_ostan/'.$row->id);?></p></th>
            </tr>
            <?php endforeach ?>
       </table>
       <?php echo form_close();?>
    </div><!--tab1-->
    
    <div class="tab-pane" id="tab2">
    	<?php echo form_open('admin/location/shahrestan')?>
		<ul class="unstyled dir-rtl">
        	<li><p>انتخاب استان :</p></li>
        	<li>
                <?php echo ostan_dropdown('ostan', $ostan, '','class=""');?>
            </li>
            <li><span class="label label-warning"><?php echo form_error('ostan');?></span></li>
        	<li><p>نام شهرستان :</p></li>
        	<li><input type="text" name="shahrestan" ></li>
             <li><span class="label label-warning"><?php echo form_error('shahrestan');?></span></li>
            <li><button type="submit" class="btn btn-primary">ذخیره</button></li>
        </ul>
        <?php echo form_close();?>
       <table class="table table-striped dir-rtl">
       		<thead>
            	<tr>
                	<th><p class="pull-right">نام</p></th>
                    <th><p class="pull-right">نام استان</p></th>
                    <th class="span2"><p class="pull-right">ویرایش</p></th>
                    <th class="span2"><p class="pull-right">حذف</p></th>
                </tr>
            </thead>
            <?php foreach($shahrestan as $row):?>
            <?php 
				$parent_id = $row->parent_id;
				$_ostan = $this->model_autopopulate->get_by(array('id'=>$parent_id));
				foreach($_ostan as $rows){
					$ostanName = $rows->name;
					}  
			?>
            <tr>
            	<td><p class="pull-right"><?php echo $row->name?></p></td>
                <td><p class="pull-right"><?php echo $ostanName?></p></td>
                <th class="span2"><p class="pull-right"><?php echo btn_edit('admin/location/edit_shahrestan/'.$row->id);?></p></th>
                <th class="span2"><p class="pull-right"><?php echo btn_delete('admin/location/delete_shahrestan/'.$row->id);?></p></th>
            </tr>
            <?php endforeach ?>
       </table> 
    </div><!--tab2-->
    
    <div class="tab-pane" id="tab3">
     <?php echo form_open('admin/location/mantage')?>
		<ul class="unstyled dir-rtl">
        	<li><p>انتخاب شهرستان :</p></li>
        	<li>
                <?php echo shahrestan_dropdown('shahrestan', $shahrestan, '','class=""');?>
            </li>
            <li><span class="label label-warning"><?php echo form_error('shahrestan');?></span></li>
        	<li><p>نام منطقه :</p></li>
        	<li><input type="text" name="mantage" ></li>
            <li><span class="label label-warning"><?php echo form_error('mantage');?></span></li>
            <li><button type="submit" class="btn btn-primary">ذخیره</button></li>
        </ul>
       <?php echo form_close();?>
       <table class="table table-striped dir-rtl">
       		<thead>
            	<tr>
                	<th><p class="pull-right">نام</p></th>
                    <th><p class="pull-right">نام شهرستان</p></th>
                    <th class="span2"><p class="pull-right">ویرایش</p></th>
                    <th class="span2"><p class="pull-right">حذف</p></th>
                </tr>
            </thead>
            <?php foreach($mantage as $row):?>
            <?php 
				$parent_id = $row->parent_id;
				$_shahrestan = $this->model_autopopulate->get_by(array('id'=>$parent_id));
				foreach($_shahrestan as $rows){
					$shahrestanName = $rows->name;
					}  
			?>
            <tr>
            	<td><p class="pull-right"><?php echo $row->name?></p></td>
                <th><p class="pull-right"><?php echo $shahrestanName?></p></th>
                <th class="span2"><p class="pull-right"><?php echo btn_edit('admin/location/edit_mantage/'.$row->id);?></p></th>
                <th class="span2"><p class="pull-right"><?php echo btn_delete('admin/location/delete_mantage/'.$row->id);?></p></th>
            </tr>
            <?php endforeach ?>
       </table> 
    </div><!--tab3-->
        
  </div><!--tab-content-->
</div><!--tabbable-->

    
   </div> 
</div>
</body>
</html>