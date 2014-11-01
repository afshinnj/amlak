<style>
.footer{
	top:5px !important;
	}
.footer_details{
	text-align:center;
	top:5px !important;
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

.contact{
	width:954px;
	margin:10px auto;
	background:#FFF;
	}

hr{
border:1px dotted #EEE;
	}
tr:nth-child(even) {
	background: #DDD;

	}											
</style>

<div class="contact">
    <div class="login">
    	<div class="title"><strong>جستجو</strong></div>
        <table width="100%">
        	<thead style="background:#1789BF; height:30px; color:#FFF">
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
			<?php
				search($status,$ostan,$shahrestan,$mantage,$noe_melk,$metraj,$money_max,$money_min);
				
			?>
        </table>
		
       
 
    </div>
</div>