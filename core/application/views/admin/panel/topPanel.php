               <link href="file:///C|/xampp/htdocs/index/assets/admin/css/bootstrap.css" rel="stylesheet" type="text/css">
        	<link href="file:///C|/xampp/htdocs/index/assets/admin/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
            <link href="file:///C|/xampp/htdocs/index/assets/admin/css/master.css" rel="stylesheet" type="text/css">
<div class="span8 toolbar pull-right well-small">
   <ul class="unstyled inline">
   	<li>
       <?php echo anchor('admin/admin','<center><img src="'.site_url("assets/admin/img/Home-icon.png").'" /></center>صفحه اصلی')?>
    </li>
    <li>
	   <?php echo anchor('admin/siteUser','<center><img src="'.site_url("assets/admin/img/Actions-view-pim-news-icon.png").'" /></center>لیست کاربران')?>
    </li>
    <li>
     <?php echo anchor('admin/about','<center><img src="'.site_url("assets/admin/img/get_info.png").'" /></center>درباره ما')?>
    </li>
    <li>
    <?php echo anchor('admin/fileManager/manager','<center><img src="'.site_url("assets/admin/img/file-manager.png").'" /></center>مدیریت فایل')?>
    </li>
    <li>
    <?php echo anchor('admin/darkhast','<center><img src="'.site_url("assets/admin/img/comment.png").'" /></center>املاک درخواستی')?>
    </li>
   </ul>
    
</div><!--span8 toolbar-->   