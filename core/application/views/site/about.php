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
											
</style>

<div class="contact">
    <div class="login">
    	<div class="title"><strong class="t">درباره ما</strong></div>
        
              <div class="contactAdd">
                    <div class="ContainTitle"><?php echo lang('contactAdd');?></div>
                    <div class="article">
                     <?php echo $about?>
                    </div> 
              </div>
        
 
    </div>
</div>