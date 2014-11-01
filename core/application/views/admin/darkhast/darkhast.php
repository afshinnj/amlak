<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#tab1" data-toggle="tab">املاک درخواستی</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active dir-rtl" id="tab1">
    <table class="table table-striped">
    	<thead>
        	<tr>
            	<th><p class="pull-right">تاریخ</p></th>
                <th class="span2"><p class="pull-right">فعال</p></th> 
                <th class="span2"><p class="pull-right">حذف</p></th> 
            </tr>
        </thead>
        <?php foreach($data as $row):?>
        <?php $active = $row->active?>
			   <tr>
                    <td><p class="pull-right dir-ltr"><?php echo anchor('detail/'.$row->id ,$row->save_date,'target="new"');?></p></td>
                    <?php if($active == 1):?>
                    <td><p class="pull-right dir-ltr"><?php echo btn_check('admin/darkhast/dactive/'.$row->id)?></p></td>
                    <?php else:?>
                    <td><p class="pull-right dir-ltr"><?php echo btn_uncheck('admin/darkhast/active/'.$row->id)?></p></td>
                    <?php endif?>
                    <td><p class="pull-right"><?php echo btn_delete('admin/darkhast/delete/'.$row->id)?></p></td>
                </tr>
        <?php endforeach?>
    </table>
    </div><!--tab1-->
  </div><!--tab-content-->
</div><!--tabbable-->
    
        </div>
    </div>
</body>
</html>
<a target="new"></a>