<style>
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
hr{
	border:1px dotted #DDD;
	}
.footer{
	top:5px !important;
	}
.footer_details{
	top:10px !important;
	text-align:center;
	line-height:25px;
	}
.footermenu{
	width:700px !important;
	}							
</style>
<div class="contact">
<div class="title"><strong>مشخصات ملک</strong></div>
<div style="margin:10px;">
<div style="background-color:#CCCCCC; padding:5px;">
	<strong>آدرس املاک روز</strong>
</div>
	<?php echo $desc; ?>
</div>
<table class="mytable">

<tr style="height:30px; ">
<td style="text-align: right; width: 33%; padding-right:10px;" class="bkgry">
اعتبار تا تاریخ<span style="font-weight:bold; "> : <?php echo $etbar?></span>
</td>
<td style="text-align: right; width: 33%; padding-right:10px" class="bkgry">
ثبت کننده <span style="font-weight:bold;"> : <?php echo $userName?></span>
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
<td class="dtltext sepratorline"><span> <?php echo status($code);?></span></td>

								
</tr>

<tr>
<td class="dtltitle sepratorline2"><div class="d-price"></div> </td>
<td class="sepratorlineN">قمیت</td>
<td class="dtltext sepratorline"><span><?php echo price($code);?> </span></td>
</tr>

<tr>
<td class="sepratorline2"><div class="d-region"></div></td>
<td class="sepratorlineN">محدوده </td>
<td class="dtltext sepratorline"><span><?php echo $ostan; ?> , <?php echo $shahrestan; ?> , <?php echo $mantage; ?></span></td>
</tr>

<tr>
<td class="dtltitle sepratorline2"> <div class="d-zirbana"> </div></td>
<td class="sepratorlineN">مشخصات </td>
<td class="dtltext sepratorline"><span>سن بنا : <?php echo $sen_bana?> <hr> تعداد خواب : <?php echo $tedad_khab?> <hr /> متراژ : <?php echo $metraj?></span></td>
</tr>
<tr>
<td class="dtltitle sepratorline2" > <div class="d-comment"> </div></td>
<td class="sepratorlineN">توضیحات</td>
<td class="dtltext sepratorline"><?php echo $sharh_darkhast ;?></span></td>
</tr>
</table>
</div>        
</div>
