		<?php echo form_open('admin/contact/contactSave');?>
        <table class="table dir-rtl"> 
            <tr>
                 <td><?php echo form_label('عنوان :')?></td>
                 <td><?php echo form_input('title',$title,'class="pull-right"')?>
                 <?php echo form_submit('submit','ذخیره','class="btn btn-primary pull-left"')?></td>
            </tr>
            <tr>
                <td><?php echo form_label('کلمات کلیدی :')?></td>
                <td><?php echo form_input('keywords',$keywords,'class="pull-right"')?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo form_textarea('description',$description,'class="redactor_content"')?></td>
            </tr>
        </table>
        <?php echo form_close();?> 
        </div>
    </div>
</body>
</html>