<style>
.footer{
	top:5px !important;
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

.contactForm{
	float:left;
	margin-left:20px;
	}
.contact{
	width:958px;
	margin:10px auto;
	background:#FFF;
	position: relative;
	}
tr:nth-child(even) {
	background: #DDD;

	}
hr{
border:1px dotted #EEE;
	}
.page{
	margin:20px;
	border-bottom:1px solid #CCC;
	height:50px;
	padding:10px;
	position:absolute;
	bottom:0;
	width:900px;
	}
.des{
	height:20px;
	margin-bottom:10px;
	}
		
.cur_tag{
	text-align:center;
	border:1px solid #CCC;
	width:30px;
	float:right;
	border-radius:5px;
	margin:1px;
	background:#09F;
	}
.num_tag{
	text-align:center;
	float:right;
	border:1px solid #0CF;
	border-radius:5px;
	margin:1px;
	width:30px;
	}
.num{
	margin-right:20px;
	margin-left:20px;
	}
.prev{
	float:right;
	text-align:center;
	border:1px solid #000;
	border-radius:5px;
	margin:1px;
	width:40px;
	}																
</style>

<div class="contact">
    <div class="login">
    	<div class="title"><strong>لیست املاک</strong></div>
        
		<table width="100%">
        	<thead style="background:#09F; height:30px; color:#FFF;">
            	<tr>
                	<th>کد</th>
                    <th>تاریخ</th>
                    <th>استان</th>
                    <th>شهر</th>
                    <th>منطقه</th>
                    <th>نوع ملک</th>
                    <th>واگذاری</th>
                    <th>خواب</th>
                    <th>سن بنا</th>
                    <th>زیر بنا</th>
                    <th>مساحت</th>
                    <th>قیمت</th>
                </tr>
            </thead>
			<?php echo list_home($list,$page)?>
            
        
        
        
 		</div>
    </div>
</div>