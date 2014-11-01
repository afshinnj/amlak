<style>
.footer{
	top:1px !important;
	}
.footer_details{
	text-align:center;
	top:10px !important;
	line-height:30px;
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

.contact input[type="text"], input[type="password"]{
	border:1px solid #CCC;
	width:200px;
	padding:5px;
	margin:5px;
	font-family:Tahoma, Geneva, sans-serif;
	}
.contactForm{
	float:left;
	margin-left:20px;
	}
.contact{
	width:960px;
	margin:10px auto;
	background:#FFF;
	}
.body{
	border:1px dashed #CCC;
	width:500px;
	margin:30px auto;
	text-align:center;
	line-height:30px;
	}											
</style>

<div class="contact">
    <div class="login">
    	<div class="title"><strong>ثبت نام با موفقیت انجام شد</strong></div>
       
        
        <?php if($this->session->userdata('user_is_logged_in') == TRUE):?>
         <div class="body">
			<?php
                    $id = $this->session->userdata('id');
                    $result = $this->model_site_user->get_by(array('id'=>$id));
                    foreach($result as $row){
                        $name = $row->userName;
                        }
            ?>
        <strong><font color="#0033FF"><?php echo $name;?></font> - عزیز به سایت املاک روز خوش آمدید. </strong><br /> 
        <strong>ثبت نام شما با موفقیت انجام شد برای ورود روی دکمه ورود کلیک کنید .</strong>
        <a href="<?php echo site_url('profile');?>"><img src="<?php echo site_url('assets/site/img/enter.png')?>" width="183" height="48" /></a>
        </div>
		<?php endif ?>	
    </div>
</div>