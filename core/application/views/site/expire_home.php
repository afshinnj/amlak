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

input[type="text"], input[type="password"]{
	padding:5px;
	border-radius:5px;
	border: 1px solid #03538D;
	}
textarea{
	padding:5px;
	border-radius:5px;
	border: 1px solid #03538D;
	max-width:700px;
	min-width:700px;	
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
	margin:0px 0px 0px 10px;
	width:730px;
	border:1px solid #FFF;
	float:left;
	padding:0px;
	}
.master{
	margin:10px auto;
	width:955px;
	min-height:400px !important;
	background:#FFF;
	}
fieldset{
	border:1px solid #CCC;
	width:720px;
	margin-bottom:20px;
	}
legend{
	border:1px solid #CCC;
	padding:5px;
	border-radius:5px ;
	}		
.tools{
	margin-bottom:20px;
	}	
hr{
	border:1px dotted #CCC;
	}
.footer{
	top:5px !important;
	}
.footer_details{
	text-align:center;
	top:10px !important;
	line-height:30px;
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
	
	 $('#datepicker').datepicker({
	  dateFormat: 'yy/mm/dd'
	 });
})
</script>
<div class="master">
    <div class="login">
    	<div class="title"><strong>حساب کاربری</strong><strong class="t" style="display:none">درخواست ملک</strong></div>
		<div class='control'>
        	<div class="row"><a href="<?php echo site_url('profile')?>">حساب کاربری</a></div>
        	<div class="row"><a href="<?php echo site_url('register_home')?>">ثبت ملک</a></div>
            <div class="row"><a href="<?php echo site_url('dht')?>">درخواست ملک</a></div>
            <div class="row"><a href="<?php echo site_url('adver')?>">آگهی ویژه</a></div>
            <div class="row"><a href="<?php echo site_url('change')?>">تغییر رمز عبور</a></div>
            <div class="row"><a href="<?php echo site_url('changeProfile')?>">تغییر مشخصات</a> </div>
            <div class="row"><a href="<?php echo site_url('user/profile/logout')?>">خروج</a></div>
        </div>
	
    	<div class="body">
        <div class="tools">
        	 
        </div>
        <fieldset>  	
            <div class="darkhast">
            <br />
            <?php echo form_open('register_home/expire_up','id="form"')?>
            <input type="hidden" value="<?php echo $post;?>" name="post"/>
            <input type="hidden" value="<?php echo $homeId;?>" name="homeId"/>
            <table width="450px" align="center">
            	<tr>
                	<td>لطفا تاریخ جدید را وارد کنید</td>
                    <td><input type="text" id="datepicker" name="etebar" style="width:200px;" value="<?php echo $etbar;?>"/></td>
                    <td> <input type="submit" value="ذخیره" style="float:left" /></td>
                </tr>
            </table>
            <?php echo form_close();?>
            </div>
        </fieldset>

        </div>



<div style="clear:both"></div>
    </div>

</div>

