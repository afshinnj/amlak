<!DOCTYPE html>
<html>
<head>	
	<title>مدیریت سایت</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/admin/css/bootstrap.css")?>" /> 	
    <link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/admin/css/bootstrap-responsive.css")?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/admin/css/master.css")?>" /> 

    <link href="<?php echo site_url("assets/admin/editor/redactor/redactor.css")?>" type="text/css" rel="stylesheet" /> 
    <script src="<?php echo site_url("assets/admin/js/jquery-1.8.2.js")?>"></script>
    <script src="<?php echo site_url("assets/admin/js/jquery-ui-1.9.0.custom.js")?>"></script>
    <script src="<?php echo site_url('assets/admin/js/jquery.ui.datepicker-cc.all.min.js')?>" language="javascript" type="text/javascript"></script>		
	<script src="<?php echo site_url("assets/admin/js/bootstrap.js")?>"></script>
	<script src="<?php echo site_url("assets/admin/editor/redactor/redactor.js")?>" language="javascript" type="text/javascript" ></script>
    <script src="<?php echo site_url('assets/admin/editor/redactor/fa.js');?>"></script>
    <script language="javascript">
    $(document).ready(function(e) {
        
                $('.redactor_content').redactor({
					imageUpload: '<?php echo site_url('assets/admin/editor/scripts/image_upload.php');?>',
                    lang: 'fa',
                    direction:'rtl',
                    autoresize: true
                });

    });
    var base_url="<?php echo site_url()?>";
    </script>
<script src="<?php echo site_url('assets/admin/js/admin.js');?>" language="javascript" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->		

</head>
<body>
   
    <div class="container well-small">
	<?php $this->load->view('admin/panel/topMenu');?>
    <div class="row"> 
       <div class="span3">
        <ul class="unstyled">
        <li class="off text-right"><?php echo anchor('admin/login/user_logout','خروج','id="logout"')?> : <i class="icon-off"></i></li>
        <li class="user text-right"><?php echo $UserName['name']?> : <i class="icon-user"></i></li>
        <li class="calendar text-right"><?php echo $date;?> : <i class="icon-calendar"></i></li>
      </ul>
     </div> 
    <?php $this->load->view('admin/panel/topPanel');?>
	
   </div>
 <hr>
