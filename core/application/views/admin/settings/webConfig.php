	<h4 class="text-right">تنظیمات سایت</h4>
    <?php echo form_open('admin/configuration/SaveWebConfig')?>
	<table class="table dir-rtl">
      <tr>
        <td align="left">عنوان سایت :</td>
        <td><?php echo form_input('title',$title,'class="span5 pull-right"')?>
         <?php echo form_submit('save','ذخیره','class="btn btn-primary pull-left"')?></td>
      </tr>
      <tr>
        <td align="left">ایمیل :</td>
        <td><?php echo form_input('email',$Admin_Email,'class="span5 pull-right"')?></td>
      </tr>
      <tr>
        <td align="left">کلمات کلیدی :</td>
        <td><?php echo form_input('keywords',$Keywords,'class="span5 pull-right"')?></td>
      </tr>
      <tr>
        <td align="left" valign="top">توضحات سایت :</td>
        <td><?php echo form_textarea('description',$Description,'class="span5 pull-right"')?></td>
      </tr>
    </table>
    <?php echo form_close()?>
        </div>
    </div>
</body>
</html>
