<style>
hr{
	border:1px dotted #CCC;
	}	
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

input[type="text"], input[type="password"]{
	text-align:right;
	border:1px solid #CCC;
	}
.control{
	width:200px;
	float:right;
	}	
.row{
	margin:5px 10px 5px 10px;
	border:1px solid #CCC;
	height:25px;
	line-height:30px;
	padding-right:20px;
	background-color:#DDD;
	}
.row a{
	text-decoration:none;
	}	
.body{
	margin:5px 0px 20px 10px;
	width:720px;
	float:left;
	}
.mastermain{
	
	min-height:400px !important;
	}	
.footer{
	top:15px !important;
	}
.footer_details{
	text-align:center;
	top:10px !important;
	line-height:30px;
	}	
legend{
	border:1px solid #CCC;
	border-radius:5px;
	padding:5px;
	}
.active{
	background-color:#FB1A1A;
	}
.active a{
	color:#FFF;
	}											
</style>
<script>
$(document).ready(function(e) {
	
	
});
</script>
<div class="mastermain">
    <div class="login">
    	<div class="title"><strong>حساب کاربری</strong><strong class="t" style="display:none">سفارش تبلیغات</strong></div>
		<div class='control'>
                	<?php
			$class = NULL;
			 $uri = $this->uri->segment(1); 
			if($uri == 'adver'){
				$class ='active';
				}
			?>
        	<div class="row"><a href="<?php echo site_url('profile')?>">حساب کاربری</a></div>
        	<div class="row"><a href="<?php echo site_url('register_home')?>">ثبت ملک</a></div>
            <div class="row"><a href="<?php echo site_url('dht')?>">درخواست ملک</a></div>
            <div class="row <?php echo $class?>"><a href="<?php echo site_url('adver')?>">آگهی ویژه</a></div>
            <div class="row"><a href="<?php echo site_url('change')?>">تغییر رمز عبور</a></div>
            <div class="row"><a href="<?php echo site_url('changeProfile')?>">تغییر مشخصات</a> </div>
            <div class="row"><a href="<?php echo site_url('user/profile/logout')?>">خروج</a></div>
        </div>
        
        <div class="body">
        <fieldset>
        	<legend><strong>انتخاب آگهی</strong></legend>
            <div><strong>نوع آگهی را انتخاب کنید</strong></div>
            <hr />
            <div style="direction:rtl; line-height:20px;">
				<table width="100%" border="0" cellpadding="10px" >
                	<tr>
                    	<td align="center">
                        <strong>آگهی شماره 1</strong>
                        <hr />
                        <img src="<?php echo site_url('assets/site/img/agahi.jpg')?>" width="300"/>
                        <hr />
                        <?php echo form_open('advertisement/save_adver');?>
                            <input name="agahi" type="hidden" value="1" />
                            <input type="submit" value="یک ماه هزینه 100,000 هزار ریال" />
                        <?php echo form_close()?>
                        </td>
                        <td valign="top" align="center">
                        <strong>آگهی شماره 2</strong>
                        <hr />
                        <img src="<?php echo site_url('assets/site/img/agahi1.PNG')?>" width="300"/>
                        <hr />
                        <?php echo form_open('advertisement/save_adver');?>
                            <input name="agahi" type="hidden" value="2" />
                            <input type="submit" value="یک ماه هزینه 200,000 هزار ریال" />
                        <?php echo form_close()?>
                        </td>
                    </tr>
                    <tr>
                    	
                    </tr>
                </table>
            </div>
       </fieldset>
        
        </div><!--body-->
<div style="clear:both"></div>
    </div>

</div>

