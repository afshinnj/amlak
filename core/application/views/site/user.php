<style>
	
.login{
	border:1px solid #A48CB6;
	width:100%;
	min-height:500px;
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
	width:300px;
	margin-top:20px;
	margin-right:20px;
	margin-bottom:10px;
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
	width:180px;
	padding:5px;
	}
.miniLogin input[type="submit"]{
	float:left;
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
	width:600px;
	float:left;
	margin-top:20px;
	margin-left:10px;
	margin-bottom:20px;
	}
.master{
	min-height:500px;
	width:957px;
	margin:10px auto;
	background:#FFF;
	}
.footer{
	top:5px !important;
	}
.footer_details{
	text-align:center;
	top:10px !important;
	line-height:30px;
	}								
</style>

<div class="master">
    <div class="login">
    	<div class="title"><strong>فرم عضویت</strong></div>
    <div class="body">
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
    	<div class="miniTitle"><strong>عضویت</strong></div>
<?php echo form_open('user/register');?>

<table dir="rtl" border="0">
<tr>
	<td valign="top" >نام و نام خانوادگی<font color="#FF0000">*</font></td>
 </tr>
 <tr>   
    <td><?php echo '<font color="#FF0000">'.form_error('userName') .'</font>'.form_input('userName',set_value('userName'),'style="margin-right:20px;"'); ?></td>
</tr>
<tr>
	<td>شناسه کاربری یا ایمیل(حداقل 6 کاراکتر)<font color="#FF0000">*</font> </td>
 </tr>
 <tr>     
    <td><?php echo '<font color="#FF0000">'.form_error('email') .'</font>'.form_input('email',set_value('email'),'style="margin-right:20px;"').form_error('email'); ?></td>
</tr>
<tr>
	<td>رمز عبور <font color="#FF0000">*</font></td>
 </tr>
 <tr> 
    <td><?php echo '<font color="#FF0000">'.form_error('password') .'</font>'.form_password('password','','style="margin-right:20px;"'); ?></td>
</tr>
<tr>
	<td>تکرار رمز عبور <font color="#FF0000">*</font></td>
     </tr>
 <tr> 
    <td><?php echo '<font color="#FF0000">'.form_error('rpassword').'</font>'. form_password('rpassword','','style="margin-right:20px;"'); ?></td>
</tr>
<tr>
	<td>تلفن ثابت</td>
     </tr>
 <tr> 
    <td><?php echo form_input('homeTell',set_value('homeTell'),'style="margin-right:20px;"').form_error('homeTell'); ?></td>
</tr>
<tr>
	<td>تلفن همراه <font color="#FF0000">*</font></td>
     </tr>
 <tr> 
    <td><?php echo '<font color="#FF0000">'.form_error('mobileTell') .'</font>'. form_input('mobileTell',set_value('mobileTell'),'style="margin-right:20px;"');?></td>
</tr>
<tr>
	<td>آدرس <font color="#FF0000">*</font></td>
     </tr>
 <tr> 
    <td><?php echo  '<font color="#FF0000">'.form_error('address') .'</font>'. form_input('address',set_value('address'),'style="margin-right:20px;"'); ?></td>
</tr>
<tr>
	<td><font color="#FF0000"><?php echo $msg?></font></td>
     </tr>
 <tr> 
    <td><?php echo $captcha?></td>
</tr>
<tr>
	<td>کد امنیتی</td>
</tr>
 <tr> 
    <td><?php echo form_input('captcha','','style="margin-right:20px;"')?></td>
</tr>
<tr>
	<td></td>
     </tr>
 <tr> 
    <td><?php echo form_submit('save','ذخیره')?></td>
</tr>
</table>

<?php echo form_close();?>
    </div>
    <div style="clear:both"></div>
    </div>

</div>

