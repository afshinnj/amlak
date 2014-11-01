<style>
.footer{
	top:20px !important;
	}
.footer_details{
	text-align:center;
	top:30px !important;
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

input[type="text"], input[type="password"]{
	
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
	margin:5px 0px 0px 10px;
	width:700px;
	border:1px solid #CCC;
	float:left;
	padding:10px;
	}
.mastermain{
	
	height:400px !important;
	}
.active{
	background-color:#FB1A1A;
	}
.active a{
	color:#FFF;
	}									
</style>

<div class="mastermain">
    <div class="login">
    	<div class="title"><strong>حساب کاربری</strong></div>
		<div class='control'>
          <?php
			$class = NULL;
			 $uri = $this->uri->segment(1); 
			if($uri == 'change'){
				$class ='active';
				}
			?>
        	<div class="row"><a href="<?php echo site_url('profile')?>">حساب کاربری</a></div>
        	<div class="row"><a href="<?php echo site_url('register_home')?>">ثبت ملک</a></div>
            <div class="row"><a href="<?php echo site_url('dht')?>">درخواست ملک</a></div>
            <div class="row"><a href="<?php echo site_url('adver')?>">آگهی ویژه</a></div>
            <div class="row <?php echo $class?>"><a href="<?php echo site_url('change')?>">تغییر رمز عبور</a></div>
            <div class="row"><a href="<?php echo site_url('changeProfile')?>">تغییر مشخصات</a> </div>
            <div class="row"><a href="<?php echo site_url('user/profile/logout')?>">خروج</a></div>
        </div>
	
    	<div class="body">
			<?php echo form_open('user/profile/pass_change');?>
            <table dir="rtl">
            	<tr>
                    <td>پسورد فعلی</td>
                    <td><?php echo form_password('old_password')?></td>
                </tr>
            	<tr>
                    <td>پسورد جدید</td>
                    <td><?php echo form_password('new_password')?></td>
                </tr> 
            	<tr>
                    <td>تکرار پسورد</td>
                    <td><?php echo form_password('r_password')?></td>
                </tr> 
                <tr>
                	<td></td>
                    <td><?php echo form_submit('change','تغییر')?></td>
                </tr> 
                <tr>
                	<td></td>
                    <td><?php echo $msg ?></td>
                </tr>            
            </table>
            <?php echo form_close();?>
        </div>




    </div>

</div>

