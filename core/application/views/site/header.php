<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="google-site-verification" content="">
<meta name="keywords" content="<?php echo $Keywords?>">
<meta name="description" content="<?php echo $Description?>">
<script src="<?php echo site_url('assets/admin/js/jquery-1.8.2.js')?>" language="javascript" > </script>

<link  href="<?php echo site_url('assets/site/style/style.css')?>" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/site/style/amlakrooz.css")?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/site/style/amlakrooz1.css")?>"/>

<title><?php echo $WebTitle?></title>
<!---->
</head>

<body>
<div class="master_top">

<div class="menutopbox">
<ul class="menutop">
<li class="li1"><a href="<?php echo site_url('index');?>">صفحه اصلی</a></li>
<li class="li2"><a>فهرست املاک</a>
<ul class="mn" style="z-index:999999;">
	<?php foreach($type as $row):?>
        <li><a href="<?php echo site_url('homes/'.$row->id);?>"><?php echo $row->title_noe_melk;?></a></li>
    <?php endforeach ?>
</ul>

</li>
<li class="li3"><a href="<?php echo site_url('register_home');?>">سپردن ملک</a></li>
<li class="li4"><a href="<?php echo site_url('dht');?>">درخواست ملک</a></li>
<li class="li5"><a href="<?php echo site_url('adver');?>">سفارش تبلیغات</a></li>
<li class="li6"><a href="#">نقشه</a></li>
<li class="li7"><a href="<?php echo site_url('contactus');?>">درباره ما</a></li>
</ul><!--menutop-->
</div><!--menutopbox-->

<a href="<?php echo site_url('index');?>"><div class="logobox"></div></a><!--logobox-->

<div class="loginbox">
<?php if($this->session->userdata('user_is_logged_in') == TRUE):?>
<?php
		$id = $this->session->userdata('id');
		$result = $this->model_site_user->get_by(array('id'=>$id));
		foreach($result as $row){
			$name = $row->userName;
			}
?>
<strong><?php echo anchor('profile',$name)?> - خوش آمدید</strong> 			
<span>/</span>
<strong><?php echo anchor('logout','خروج');?></strong>

<?php else:?>

	<?php echo anchor('user_login','ورود');?>
    <span>/</span>
    <?php echo anchor('user_register','عضویت');?>

<?php endif ?>		

</div><!--login box-->

<div style="position:absolute ; left:0px ;top:5px; height:60px; width:468px">
<?php echo banner();?>
</div>
<div style="position:absolute ; left:0px ;top:75px; height:10px; width:200px;">
	<strong><?php echo $this->nikdate->date("l j F Y");?></strong>
</div>
</div><!--master_top-->
