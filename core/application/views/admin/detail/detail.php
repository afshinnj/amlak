<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#tab1" data-toggle="tab">نوع ملک</a></li>
    <li class="pull-right"><a href="#tab2" data-toggle="tab">کاربری</a></li>
    <li class="pull-right"><a href="#tab3" data-toggle="tab">وضعیت سند</a></li>
    <li class="pull-right"><a href="#tab4" data-toggle="tab">نما</a></li>
    <li class="pull-right"><a href="#tab5" data-toggle="tab">کفپوش</a></li>
	<li class="pull-right"><a href="#tab6" data-toggle="tab">سرویس آشپزخانه</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active dir-rtl" id="tab1">
    	<?php echo form_open('admin/detail/type_home');?>
		<ul class="unstyled">
        	<li><p>نوع ملک :</p></li>
        	<li><input type="text" name="melk" ></li>
            <li><span class="label label-warning"><?php echo form_error('melk');?></span></li>
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
            <?php foreach($typeHome as $row):?>
            <tr>
            	<td><p class="pull-right"><?php echo $row->title_noe_melk?></p></td>
                <th class="span2"><p class="pull-right"><?php echo btn_edit('admin/detail/edit_type_home/'.$row->id);?></p></th>
                <th class="span2"><p class="pull-right"><?php echo btn_delete('admin/detail/delete_type_home/'.$row->id);?></p></th>
            </tr>
            <?php endforeach ?>
       </table>
       <?php echo form_close();?>
    </div><!--tab1-->
    
    <div class="tab-pane dir-rtl" id="tab2">
		<?php echo form_open('admin/detail/karbary');?>
		<ul class="unstyled">
        	<li><p>نوع کاربری :</p></li>
        	<li><input type="text" name="karbary" ></li>
            <li><span class="label label-warning"><?php echo form_error('karbary');?></span></li>
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
            <?php foreach($karbary as $row):?>
            <tr>
            	<td><p class="pull-right"><?php echo $row->title_karbary?></p></td>
                <th class="span2"><p class="pull-right"><?php echo btn_edit('admin/detail/edit_karbary/'.$row->id);?></p></th>
                <th class="span2"><p class="pull-right"><?php echo btn_delete('admin/detail/delete_karbary/'.$row->id);?></p></th>
            </tr>
            <?php endforeach ?>
       </table>
       <?php echo form_close();?>
    </div><!--tab2-->
    
    <div class="tab-pane dir-rtl" id="tab3">
		<?php echo form_open('admin/detail/sanad');?>
		<ul class="unstyled">
        	<li><p>نوع سند :</p></li>
        	<li><input type="text" name="sanad" ></li>
            <li><span class="label label-warning"><?php echo form_error('sanad');?></span></li>
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
            <?php foreach($sanad as $row):?>
            <tr>
            	<td><p class="pull-right"><?php echo $row->title_sanad?></p></td>
                <th class="span2"><p class="pull-right"><?php echo btn_edit('admin/detail/edit_sanad/'.$row->id);?></p></th>
                <th class="span2"><p class="pull-right"><?php echo btn_delete('admin/detail/delete_sanad/'.$row->id);?></p></th>
            </tr>
            <?php endforeach ?>
       </table>
       <?php echo form_close();?>
    </div><!--tab3-->
     
    <div class="tab-pane dir-rtl" id="tab4">
		<?php echo form_open('admin/detail/nama');?>
		<ul class="unstyled">
        	<li><p>نوع نما :</p></li>
        	<li><input type="text" name="nama" ></li>
            <li><span class="label label-warning"><?php echo form_error('nama');?></span></li>
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
            <?php foreach($nama as $row):?>
            <tr>
            	<td><p class="pull-right"><?php echo $row->title_nama?></p></td>
                <th class="span2"><p class="pull-right"><?php echo btn_edit('admin/detail/edit_nama/'.$row->id);?></p></th>
                <th class="span2"><p class="pull-right"><?php echo btn_delete('admin/detail/delete_nama/'.$row->id);?></p></th>
            </tr>
            <?php endforeach ?>
       </table>
       <?php echo form_close();?>
    </div><!--tab4-->
    
    <div class="tab-pane dir-rtl" id="tab5">
		<?php echo form_open('admin/detail/kafpoosh');?>
		<ul class="unstyled">
        	<li><p>نوع کفپوش :</p></li>
        	<li><input type="text" name="kafpoosh" ></li>
            <li><span class="label label-warning"><?php echo form_error('kafpoosh');?></span></li>
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
            <?php foreach($kafpoosh as $row):?>
            <tr>
            	<td><p class="pull-right"><?php echo $row->title_kafpoosh?></p></td>
                <th class="span2"><p class="pull-right"><?php echo btn_edit('admin/detail/edit_kafpoosh/'.$row->id);?></p></th>
                <th class="span2"><p class="pull-right"><?php echo btn_delete('admin/detail/delete_kafpoosh/'.$row->id);?></p></th>
            </tr>
            <?php endforeach ?>
       </table>
       <?php echo form_close();?>
    </div><!--tab5-->
      
    <div class="tab-pane dir-rtl" id="tab6">
		<?php echo form_open('admin/detail/kabinet');?>
		<ul class="unstyled">
        	<li><p>سرویس آشپز خانه :</p></li>
        	<li><input type="text" name="kabinet" ></li>
            <li><span class="label label-warning"><?php echo form_error('kabinet');?></span></li>
            <li><button type="submit" class="btn btn-primary">ذخیره</button></li>
        </ul>
       <table class="table table-striped dir-rtl">
       		<thead>
            	<tr>
                	<th><p class="pull-right">نام</p></th>
                   <!-- <th class="span2"><p class="pull-right">ویرایش</p></th>-->
                    <th class="span2"><p class="pull-right">حذف</p></th>
                </tr>
            </thead>
            <?php foreach($kabinet as $row):?>
            <tr>
            	<td><p class="pull-right"><?php echo $row->title_kabinet?></p></td>
                <!--<th class="span2"><p class="pull-right"><?php echo btn_edit('admin/detail/edit_kafpoosh/'.$row->id);?></p></th>-->
                <th class="span2"><p class="pull-right"><?php echo btn_delete('admin/detail/delete_kabinet/'.$row->id);?></p></th>
            </tr>
            <?php endforeach ?>
       </table>
       <?php echo form_close();?>
    </div><!--tab5-->
  </div><!--tab-content-->
</div><!--tabbable-->

    
   </div> 
</div>
</body>
</html>