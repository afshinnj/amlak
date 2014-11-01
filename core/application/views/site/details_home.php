<style>
#slider{
	width:400px !important;
	height:224px !important;
	background:#FFF !important;
	}
#thumbs{
	top:250px !important;
	}
	
.sliderFrame{
	height:350px !important;
	}		
.login {
	border: 1px solid #A48CB6;
	width: 100%;
	min-height: 400px;
	background: #FFF;
}
.title {
	border-bottom: 1px solid #A48CB6;
	height: 30px;
	padding-right: 20px;
	line-height: 30px;
	background-color: #CCC;
}
.contact input[type="text"], input[type="password"] {
	border: 1px solid #CCC;
	width: 200px;
	padding: 5px;
	margin: 5px;
	font-family: Tahoma, Geneva, sans-serif;
}
.contactForm {
	float: left;
	margin-left: 20px;
}
.contact {
	width: 953px;
	margin: 10px auto;
	background: #FFF;
}
.adminlist{
	border:1px solid #CCC;
	width:900px;
	margin:10px auto;
	}
.adminlist tr{
	height:30px;
	}
			
.adminlist tr:nth-child(even) {
	background: #CCC;
	}
.adminlist td {
	padding-right:10px;
	}
caption{
	height:40px;
	line-height:35px;
	}
.footer{
	top:20px !important;
	}
.footer_details{
	text-align:center !important;
	top:30px !important;
	line-height:20px;
	}	
hr{
	border:1px dotted #DDD;
	}
						
</style>
<link  href="<?php echo site_url('assets/site/style/js-image-slider.css')?>" rel="stylesheet"/>
<div class="contact">
<div class="title"><strong>مشخصات ملک</strong></div>
<table style="margin-top:10px;" width="100%">

<tr >
<td  class="bkgry"><strong>آدرس املاک روز</strong></td>
</tr>
</table>



<table width="100%" >
<tr>
<td class="normaltablelist_Tcell">
<?php echo $desc?>
</td>
</tr>
</table>


<table style="margin-top:10px;" width="100%">

<tr >
<td style="text-align: right; width: 50%;" class="bkgry">
جزئیات ملک شماره<span style="font-weight:bold;"> : <?php echo $code ;?></span>
ثبت شده در تاریخ<span style="font-weight:bold;"> : <?php echo $date ;?></span>
</td>

<td style="text-align: left; width: 50%;" class="bkgry">
<span style="font-weight:bold;">تعداد بازدید: <?php echo $bazdid ;?></span>
</td>
</tr>
</table>

<table class="mytable">
<tr>
<td class="dtltitle sepratorline2"><div class="d-mtype"></div></td>
<td class="sepratorlineN">نوع ملک </td>
<td class="dtltext sepratorline"><span><?php echo $noe_melk; ?></span></td>					
</tr>

<tr>
<td class="sepratorline2"><div class="d-mstatus"></div></td>
<td class="sepratorlineN">وضعیت</td>
<td class="dtltext sepratorline"><span> <?php echo status($code); ?></span></td>
</tr>

<tr>
<td class="dtltitle sepratorline2"><div class="d-price"></div> </td>
<td class="sepratorlineN">قیمت</td>
<td class="dtltext sepratorline"><span><?php echo priceS($code); echo vam($code);?></span></td>

								
										
                                          
</tr>

<tr>
<td class="sepratorline2"><div class="d-region"></div></td>
<td class="sepratorlineN">محدوده </td>
<td class="dtltext sepratorline"><span><?php echo $location ?></span></td>
</tr>

<tr>
<td class="dtltitle sepratorline2"><div class="d-arse"></div> </td>
<td class="sepratorlineN">مشخصات عرصه</td>
<td class="dtltext sepratorline"><span>مساحت زمین <?php echo $masahat?> متر - کاربری <?php echo $karbari?> </span></td>
</tr>
<tr>
<td class="sepratorline2"><div class="d-score"></div></td>
<td class="sepratorlineN">امتیازات</td>
<td class="dtltext sepratorline"><span><?php echo $emtiyaz; ?> - تلفن : <?php echo $telefon?>  </span></td>
</tr>

<tr>
<td class="dtltitle sepratorline2"> <div class="d-zirbana"> </div></td>
<td class="sepratorlineN">مشخصات </td>
<td class="dtltext sepratorline"><span><?php echo $details;?></span></td>
</tr>
<tr>
<td class="dtltitle2 sepratorline2"><div class="d-sanad"></div></td>
<td class="sepratorlineN">وضعیت سند</td>
<td class="dtltext sepratorline"><span><?php echo $sanad?></span> </td>
</tr>

<tr>
<td class="dtltitle sepratorline2" > <div class="d-comment"> </div></td>
<td class="sepratorlineN">توضیحات</td>
<td class="dtltext sepratorline"><span><?php echo $tozihat; ?></span></td>
</tr>
<tr>
<td class="dtltitle sepratorline2" ><div class="d-comment"></div> </td>
<td class="sepratorlineN">سایر امکانات</td>
<td class="dtltext sepratorline">
	<?php 
		foreach($khane as $row){
			echo $row->emkanat .' , ';
			}
	?></td>                     
</tr>

</table>
<?php if($image != NULL):?>
<table class="mytable">
<tr>
<td class="bkgry">
تصاویر ملک
</td>
</tr>
</table>   
      <div class="sliderFrame"> 
           <div id="wrapper">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <?php foreach($image as $row):?>
                         <img src="<?php echo site_url('images/home/'.$row->name)?>" />
                      <?php endforeach ?>
                </div>
        </div>
   </div>
        <!--thumbnails-->
        <div id="thumbs" >
        <?php foreach($image as $row):?>
            <div class="thumb">
              <div class="frame"><img src="<?php echo site_url('images/home/'.$row->name)?>"/></div>
            </div>
        <?php endforeach ?>  
        </div>
 <?php endif ?>       
</div>        
</div>
