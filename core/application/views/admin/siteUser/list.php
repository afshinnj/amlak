<div class="tabbable text-right"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="pull-right"><a href="#tab1" data-toggle="tab">لیست کاربران</a></li>
  </ul>
  
  
  <div class="tab-content">
  
    <div class="tab-pane active" id="tab1">
        <table class="table table-striped dir-rtl">
            <thead>
                <tr>
                    <th><p class="pull-right">نام کاربر</p></th>
                    <th class="span2"><p class="pull-right">حذف</p></th>
                </tr>
            </thead>
          <?php foreach($data as $row):?>        
            <tr>
                <td><p class="pull-right"><?php echo $row->userName?></p></td>
                <td><p class="pull-right"><?php echo btn_delete("user_delete/$row->id")?></p></td>
            </tr>
          <?php endforeach ?>
         </table>
    </div>
    
  </div><!--tab-content-->
  
</div><!--tabbable-->
