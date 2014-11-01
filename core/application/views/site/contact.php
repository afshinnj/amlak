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
.contactAdd{
	width:400px;
	float:right;
	margin:10px;
	}
.contact ul{
	list-style:none;
	}
.captcha{
	width:100px !important;
	}												
</style>

<div class="contact">
    <div class="login">
    	<div class="title"><strong class="t">تماس با ما</strong></div>
        
              <div class="contactAdd">
                    <div class="ContainTitle">تماس با ما</div>
                    <div class="article">
                     <?php echo $contact?>
                    </div> 
              </div>
        
 <div class="contactForm">
                  <div class="ContainTitle"></div>
                    <?php echo form_open('contactus');?>
                     <ul class="ulcontact">
                      <li><?php echo form_input('name',set_value('name'),'placeholder="نام و نام خانوادگی"');?> </li>
                      <li><?php echo form_error('name'); ?></li> 
                      
                      <li><?php echo form_input('email',set_value('email'),'placeholder="ایمیل"');?></li> 
                      <li><?php echo form_error('email'); ?></li>
                      
                      <li><?php echo form_input('subject',set_value('subject'),'placeholder="موضوع"');?></li>
                      <li><?php echo form_error('subject'); ?></li>
                      
                      <li><?php echo form_textarea('message',set_value('message'),'placeholder="متن پیام"');?></li>
                      <li><?php echo form_error('message'); ?></li>
                      
                      <li><?php echo $captcha?></li>
                      <li><?php echo form_input('captcha','','class = "captcha" placeholder="کد امنیتی"');?>
					      <?php echo form_submit('send','ارسال')?>
					  </li>
                      <li style="text-align:right"><?php echo $msg?></li> 
                    </ul>
                    <?php echo form_close();?>
                   </div> 
               <div style="clear:both"></div>
            </div>
    </div>
</div>