<div class="row dir-rtl">
	<div class="span2  pull-right">
    	<div class="title"><i class='icon-folder-close'></i> پوشه ها</div>
        <?php foreach($folders as $row):?>
                  		<?php $name = $row['name']?>
                  	<?php if($row['name'] != 'index.html' and $row['name'] !='.htaccess'): ?>
                      <?php  $a = explode('.',$row['name']); ?>
                       <?php if(!isset($a[1])):?>
                     	   <div class="title">
			                  <?php echo anchor("admin/fileManager/manager/$name","<i class='icon-folder-open'></i> ". $row['name']);?>  
                            </div>
						<?php endif?>

                    <?php endif ?>    
         <?php endforeach ?>
    </div>
    
	<div class="span10 pull-left" style="overflow:auto; height:400px;">
    	<div class="title"><i class='icon-th-list'></i> فایل ها</div>
          <table class="table dir-rtl table-hover">
              <?php foreach ($file as $row):?>
               <?php $name = trim($row['name'])?>
                  <?php if($row['name'] != 'index.html' and $row['name'] !='.htaccess'): ?>
                    <tr>
                        <td colspan="2" rowspan="2">
                        <img width="100" src="<?php echo base_url()?>images/<?php echo $folder?>/<?php echo $row['name']; ?>" /></td>
                        <td>
						<?php echo $row['name']; ?>
                        </td>
                      </tr>
                      <tr class="span8">
                        <td>
						<?php echo anchor("admin/fileManager/fileDel/$folder/$name","<img src='".base_url()."assets/admin/img/bin.png'/>")?>
                        </td>
                    </tr>
                  <?php endif ?>
               <?php endforeach ?> 
           </table>
        
    </div>

<!--/* <fieldset id="div-upload" class="dir-rtl">
    <legend>آپلود فایل</legend>
        <?php echo form_open_multipart('admin/fileManager/do_upload');?>
        	<?php echo form_hidden('folder',$folder)?>
            <input type="file" name="userfile" size="20" />
            <button type="submit" class="btn btn-primary"><i class="icon-upload"></i> آپلود</button>
        <?php echo form_close()?>
  </fieldset>*/-->



        </div>
    </div>
</body>
</html>