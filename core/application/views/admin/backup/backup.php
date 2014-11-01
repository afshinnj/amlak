<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#tab1" data-toggle="tab">پشتیبان گیری</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active dir-rtl" id="tab1">
    <?php echo form_open('admin/backup/create');?>	
    	<button type="submit" class="btn btn-primary">بشتیبان گیری</button>
    <?php echo form_close();?>   
    <table class="table table-striped">
    	<thead>
        	<tr>
            	<th><p class="pull-right">تاریخ</p></th>
                <th class="span2"><p class="pull-right">دانلود</p></th>
                <th class="span2"><p class="pull-right">بازیابی</p></th>
                <th class="span2"><p class="pull-right">حذف</p></th> 
            </tr>
        </thead>
        <?php foreach($file as $row):?>
			<?php if($row['name']!='index.html'):?>
                <tr>
                    <td><p class="pull-right dir-ltr"><?php echo $row['name'];?></p></td>
                    <td><p class="pull-right"><?php echo btn_download('admin/backup/download/'.$row['name'])?></p></td>
                    <td><p class="pull-right"><?php echo btn_restor('admin/backup/restore/'.$row['name'])?></p></td>
                    <td><p class="pull-right"><?php echo btn_delete('admin/backup/delete/'.$row['name'])?></p></td>
                </tr>
            <?php endif?>
        <?php endforeach?>
    </table>
    </div><!--tab1-->
  </div><!--tab-content-->
</div><!--tabbable-->
    
        </div>
    </div>
</body>
</html>
