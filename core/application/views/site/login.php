<style>
	
.login{
	border:1px solid #A48CB6;
	width:100%;
	min-height:400px;
	background:#FFF;
	}
.title{
	border-bottom:1px solid #A48CB6;
	height:30px;
	padding-right:20px;
	line-height:30px;
	background-color:#CCC;
	}
.miniLogin{
	float:right;
	border:1px solid #CCC;
	width:250px;
	margin-top:20px;
	margin-right:20px;
	}
.reg{
	float:right;
	width:250px;
	margin-top:20px;
	margin-right:20px;
	}	
.miniLogin ul{
	list-style:none;
	padding:0;
	margin:0;
	}
.miniLogin ul li{
	margin-right:20px;
	margin-left:20px;
	margin-bottom:10px;
	}	
.miniLogin input[type="text"], input[type="password"]{
	border:1px solid #CCC;
	width:200px;
	padding:5px;
	}
.miniTitle{
	padding-top:5px;
	padding-right:10px;
	padding-left:10px;
	height:30px;
	border-bottom:1px solid #A48CB6;
	margin-bottom:10px;
	line-height:30px;
	}
.body{
	width:650px;
	float:left;
	margin-top:20px;
	margin-left:20px;
	margin-bottom:20px;
	}

.miniLogin input[type="submit"]{
	float:left;
	margin-bottom:10px;
	}	
hr{
	border:1px dashed #CCC;
	}
.footer{
	top:20px !important;
	}
.footer_details{
	text-align:center;
	top:30px !important;
	line-height:30px;
	}										
</style>

<div class="mastermain">
    <div class="login">
    	<div class="title"><strong>وروداعضاء</strong></div>
    <div class="body">
    <h2>برای استفاده از امکانات سایت باید عضو شوید .</h2>
    <hr>
     <h2>از امکانات وب سایت بانک اطلاعات املاک روز استفاده کنید .</h2>
    <h4>
     مشخصات ملک خود را در بانک اطلاعات بانک اطلاعات املاک روز ثبت کنید.</h4>
<h4>سوالات حقوقي خود در باره ملك را از كارشناسان ما بپرسيد .</h4>
<h4>مشخصات املاک ذخیره شده را با یکدیگر مقایسه کنید. </h4>
<hr>
<h3>آگهی</h3>
<h4>
 کاربرگرامی با پرداخت هزینه بسیار ناچیز(ده هزار تومان درماه) میتوانید اگهی خود را درصفحه اول
  سایت ودردید هزاران نفر از بازدید کنندگان  قرار دهید. </h4>
  
    </div>
    <div class="miniLogin">
    	<div class="miniTitle"><img style="float:left" src="<?php echo site_url('assets/admin/img/lock.png')?>" width="21" height="26"> <strong>وروداعضاء</strong></div>
		<?php echo form_open('check_user');?>
            <ul>
            	<li style="margin-bottom:5px !important;">شناسه کاربری یا ایمیل</li>
                <li><?php echo form_input('email')?></li>
                <li style="margin-bottom:5px !important;">رمز عبور</li>
                <li><?php echo form_password('password')?></li>
                <li><?php echo form_submit('login','ورود')?></li>
                <li><?php echo $msg?></li>
            </ul>
        <?php echo form_close();?>
    </div>
    <div class="reg">
    <center>
    <a href="<?php echo site_url('user/register');?>"><img src="<?php echo site_url('assets/site/img/register.png')?>" /></a>
    </center>
    </div>
    </div>

</div>