<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ورود به مدیریت</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo site_url('assets/admin/css/bootstrap.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo site_url('assets/admin/css/bootstrap-responsive.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo site_url('assets/admin/css/master.css')?>" rel="stylesheet" type="text/css">
    <script src="<?php echo site_url('assets/admin/js/jquery-1.8.2.js')?>"></script>
    <script src="<?php echo site_url('assets/admin/js/jquery-ui-1.9.0.custom.js')?>"></script>
    <script src="<?php echo site_url('assets/admin/js/login.js')?>" language="javascript" type="text/javascript"></script>
    <script src="<?php echo site_url('assets/admin/js/jquery.easing.1.3.js')?>"></script>
	
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-image:url(assets/admin/img/linen.jpg);
      }
	  #login-container {
		  border-bottom-left-radius:5px;
		  border-bottom-right-radius:5px;
		  border-top-left-radius:5px;
		  border-top-right-radius:5px;
		  margin:0 auto;
		  position:relative;
		  width:356px;
		  border:1px solid rgba(63, 65, 67, 0.498039);
		  box-shadow:#3F4143 0 6px 10px -2px;
		}
		#login-sub-header {
          background: linear-gradient(to bottom, #E5E5E5 0px, #D4D4D4 100%) repeat scroll 0 0 transparent;
          border-color: -moz-use-text-color -moz-use-text-color #A1A1A1;
		  background-image:-webkit-linear-gradient(top, #E5E5E5 0px, #D4D4D4 100%);
		  background-position:initial initial;
		  background-repeat:initial initial;
		  border-bottom-color:#A1A1A1;
		  border-bottom-left-radius:0;
		  border-bottom-right-radius:0;
		  border-bottom-style:solid;
		  border-bottom-width:1px;
		  border-left-style:none;
		  border-right-width:0;
		  border-top-left-radius:5px;
		  border-top-right-radius:5px;
		  border-top-width:0;
		  height:65px;
		  padding:10px 0 0;
		  text-align:center;
		}
		.modal-body{
			background:#EAEAEA!important;
			}
		.pwreset{
		  background:#D4D4D4!important;
		  border-top-color:#A1A1A1;
		  border-top-left-radius:0;
		  border-top-right-radius:0;
		  border-top-style:solid;
		  border-top-width:1px;
		  padding:20px 20px 0 20px;
		  display:none;
			}	
		.login-sub{
		  background-color:#EAEAEA;
		  border-top-color:#FFFFFF;
		  border-top-left-radius:0;
		  border-top-right-radius:0;
		  border-top-style:solid;
		  border-top-width:1px;
		  color:#4C4C4C;
		  font-size:12px;
		  height:190px;
		  padding-left:30px;
		  padding-right:20px;
			}	
			input[type='text'], input[type='password']{
				width:270px !important;
				}

    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>
  
	<div id="login-container">
    	<div class="modal-header" id="login-sub-header">
        	<img  src="<?php echo site_url('assets/admin/img/ablog-logo.png')?>"/>
        </div>
            <div class="login-sub">
            <?php echo form_open('login')?>
            	<ul class="unstyled pull-right">
                	<li class="text-right"><p>&nbsp;</p></li>
                    <li>
                        <div class="input-append">
                          <input class="text-right" id="prependedInput" name="name" type="text" placeholder="نام کاربری را وارد کنید">
                          <span class="add-on"><i class="icon-user"></i></span>
                        </div>
					</li>
                    <li><label class="text-error pull-right"><?php echo form_error('name'); ?></label></li>
                	<li class="text-right"><p>&nbsp;</p></li>
                 	<li>
                        <div class="input-append">
                          <input class="text-right" id="prependedInput" name="pass" type="password" placeholder="رمز عبور را وارد کنید">
                          <span class="add-on"><i class="icon-lock"></i></span>
                        </div>
					</li> 
                    <li><label class="text-error pull-right"><?php echo form_error('pass'); ?></label></li> 
                    <li class="text-right"><p>&nbsp;</p></li>
                    <li>
                    	<button class="btn btn-warning" type="submit"><strong>ورود</strong></button>
                        <a href="javascript:void=null" id='pwreset' class="text-info pull-right">فراموشی رمز عبور</a>
                    </li>
                </ul>
              <?php echo form_close()?>
            </div>
        <div class="pwreset"> 
		<?php echo form_open('login/passReset')?>
        <ul class="unstyled">
        	<li>
           <div class="input-append pull-right">
            <input class="text-right" id="prependedInput" name="name" type="text" placeholder="ایمل خود را وارد کنید">
            <span class="add-on"><i class="icon-envelope"></i></span>
          </div>            
            </li>
            <li>
            <button class="btn btn-warning" type="submit"><strong>ارسال</strong></button>
            </li>
            <li><?php echo $msg; ?></li>
        </ul>
		<?php echo form_close()?> 
          
          <div class="clearfix"></div>
        </div><!--pwreset-->
        <div class="modal-footer">
            <p class="text-center">Copyright © <?php echo date('Y');?> <strong>aBlog</strong></p>
            <p class="text-center">املاک روز : نسخه 1.2.0</p>
        </div>
    </div>  
    
  </body>
</html>
