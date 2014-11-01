<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#tab1" data-toggle="tab">ویرایش</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active dir-rtl" id="tab1">
    	<?php echo form_open('admin/location/edit_ostan');?>
        
        <input type="hidden" value="<?php echo $id;?>" name="id" />
		<ul class="unstyled inline">
        	<li><p>نام استان :</p></li>
        	<li><input type="text" name="ostan" value="<?php echo $name; ?>"> </li>
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