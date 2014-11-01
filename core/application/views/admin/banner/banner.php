<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/site/style/absolution.css")?>" />
<h3 class="text-right">بنر تبلیغاتی</h3>

<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#tab1" data-toggle="tab">ثبت بنر</a></li>
    <li class="pull-right"><a href="#tab2" data-toggle="tab">لیست</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active dir-rtl" id="tab1">
		<?php echo form_open_multipart('admin/banner/save');?>
        <table class="table dir-rtl">
            <tr>
                <td><?php echo form_label('عنوان :')?></td>
                <td><?php echo form_input('title','','class="pull-right span5"')?> 
                <?php echo form_submit('submit','ذخیره','class="btn btn-primary pull-left"')?></td>
            </tr>
            <tr>
                <td><?php echo form_label('تاریخ اعتبار :')?></td>
                <td><?php echo form_input('date','','class="pull-right span5 datepicker"')?></td>
            </tr>
            <tr>
                <td><?php echo form_label('عکس :')?></td>
                <td><input type="file" name="userfile" size="40" class="pull-right" /></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo form_textarea('description','','class="redactor_content"')?></td>
            </tr>
        </table>
        <?php echo form_close();?>	
    </div><!--tab1-->
    
    <div class="tab-pane active dir-rtl" id="tab2">
		<table class="table table-striped dir-rtl">
        	<thead>
            	<tr>
                	<th><p class="pull-right">عنوان</p></th>
                    <th class="span3"><p class="pull-right">تاریخ اعتبار</p></th>
                  <!--  <th class="span2"><p class="pull-right">ویرایش</p></th>-->
                    <th class="span2"><p class="pull-right ">حذف</p></th>
                </tr>
            </thead>
            <?php foreach($banner as $row):?>
            <tr>
            	<td><p class="pull-right"><?php echo $row->title;?></p></td>
                <td><p class="pull-right"><?php echo $row->date;?></p></td>
                <!--<td><p class="pull-right"><?php echo btn_edit('admin/banner/edit/'.$row->id);?></p></td>-->
                <td><p class="pull-right"><?php echo btn_delete('admin/banner/delete/'.$row->id);?></p></td>
            </tr>
            <?php endforeach ?>
        </table>
        
    </div><!--tab2-->    
    
    </div>
    </div>
	

        </div>
    </div>
</body>
</html>
