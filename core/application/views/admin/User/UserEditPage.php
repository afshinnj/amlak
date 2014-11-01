<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#tab1" data-toggle="tab">ویرایش کاربر</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active" id="tab1">
	<?php echo form_open('admin/users/updateUser');?>
    <?php echo form_hidden('id',$id)?> 
	<table class="table dir-rtl span3 pull-right">
        <tr>
          <td><?php echo form_input('LoginName',$name,'placeholder="نام کاربری"')?></td>
          <td><?php echo form_input('UserEmail',$email,'placeholder="ایمیل"')?></td>
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
    
  </div><!--tab-content-->
  
</div><!--tabbable-->
