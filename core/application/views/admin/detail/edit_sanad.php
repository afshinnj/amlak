<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#tab1" data-toggle="tab">ویرایش</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active dir-rtl" id="tab1">
    	<?php echo form_open('admin/detail/edit_sanad');?>
        <input type="hidden" value="<?php echo $id?>" name="id" >
		<ul class="unstyled">
        	<li><p>نوع سند :</p></li>
        	<li><input type="text" name="sanad" value="<?php echo $type?>"></li>
            <li><span class="label label-warning"><?php echo form_error('sanad');?></span></li>
            <li><button type="submit" class="btn btn-primary">ذخیره</button></li>
        </ul>
       <?php echo form_close();?>
    </div><!--tab1-->

  </div><!--tab-content-->
</div><!--tabbable-->

    
   </div> 
</div>
</body>
</html>