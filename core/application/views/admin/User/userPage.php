<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#tab1" data-toggle="tab">ایجاد مدیر جدید</a></li>
    <li class="pull-right"><a href="#tab2" data-toggle="tab">لیست مدیران</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active" id="tab1">
          <?php echo form_open('admin/users');?>
      <table class="table dir-rtl span3 pull-right">
        <tr>
          <td><?php echo form_input('LoginName',set_value('LoginName'),'placeholder="نام کاربری"')?></td>
          <td><?php echo form_input('UserEmail',set_value('UserEmail'),'placeholder="ایمیل"')?></td>
        </tr>
        <tr>
          <td><?php echo form_password('LoginPass','','placeholder="رمز عبور"')?></td>
          <td><?php echo form_password('LoginPassconf','','placeholder="تکرار رمز عبور"')?></td>
        </tr>
        <tr>
          <td></td>
          <td><?php echo form_submit('submit','ذخیره','class="btn btn-primary"')?></td>
        </tr>
      </table>  
     <?php echo form_close();?> 
          <div class="message">
             <?php echo validation_errors(); ?>
          </div>
    </div>
    
    <div class="tab-pane" id="tab2">
    <table class="table table-striped dir-rtl">
    	<thead>
         	<tr>
            	<th><p class="pull-right">نام کاربر</p></th>
                <th class="span2"><p class="pull-right">ویرایش</p></th>
                <th class="span2"><p class="pull-right">حذف</p></th>
            </tr>
        </thead>
      <?php foreach($data as $row):?>        
        <tr>
        	<td><p class="pull-right"><?php echo $row->LoginName?></p></td>
            <td><p class="pull-right"><?php echo btn_edit("admin/users/edit/$row->id")?></p></td>
            <td><p class="pull-right"><?php echo btn_delete("admin/users/delete/$row->id")?></p></td>
        </tr>
      <?php endforeach ?>
     </table>

    </div>
    
  </div><!--tab-content-->
  
</div><!--tabbable-->
