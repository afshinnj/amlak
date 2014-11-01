<script type="text/javascript" src="<?php echo site_url('assets/site/js/saveAdver.js');?>"></script>
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
	border:1px solid #CCC;
	float:left;
	padding:10px;
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
.register_home{
	width:720px !important;
	}
.parde{
	background: rgba(000,000,00,0.2);
	width:700px;
	height:1230px;
	z-index:9999999;
	position:absolute;
	border-radius:5px;
	padding:10px;
	display:none;
	}
.loader{
	margin: auto;
	background:#333;
	border-radius:5px;
	color:#FFF;
	width:700px;
	position:fixed;
	}										
</style>
<div class="mastermain">
    <div class="login">
    	<div class="title"><strong>حساب کاربری</strong></div>
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
         <div class="parde">
        	<div class="loader">
            	<center>
                	<strong>لطفا کمی صبر کنید.</strong><br />
                	<strong>در حال ذخیره سازی اطلاعات.</strong><br />
        			<img src="<?php echo site_url('assets/site/img/jKEcVPZFk-2.gif');?>"/>
                </center>
            </div>
        </div>
           <font color="#FF0000">
           		<strong>*</strong>
           	</font><strong>پر کردن قسمت های ستاره دار الزامیست</strong>
            <hr />
            <br />
        <!--table1-->

        <?php echo form_open_multipart('advertisement/registerHome','id="form"');?>
        <input value="<?php echo $ads_type ?>" name="ads_type" type="hidden" />
        
        <table width="100%">
        <tbody>
        
        <!--table1 satr 1--><tr>
        <td class="bkgry">استان<font color="#FF0000"><strong>*</strong></font> </td>
        <td class="bkgry">شهر	<font color="#FF0000"><strong>*</strong></font></td>
        <td align="right" colspan="2" class="bkgry">منطقه<font color="#FF0000"><strong>*</strong></font> </td>
        </tr><!--table1 satr 1-->
        
        
        <!--table satr 2--><tr>
        <td style="width: 100px;">
            <select id="tests" name="ostan" class="selectbox">
                <option value="">استان</option>
                <?php foreach ($tests as $key => $test): ?>
                <option value="<?php echo $key; ?>"> <?php echo $test; ?> </option>
                <?php endforeach; ?>
            </select>
        </td>
        
        <td style="width: 100px;">
            <select id="categories" name="shahrestan" class="selectbox">
                <option value="">شهرستان</option>
            </select>
        </td>
        
        <td align="right" style="width: 100px;">
        
            <select id="contents" name="mantage" class="selectbox">
                <option value="">منطقه</option>
            </select>
            
        </td>
        </tr><!--table1 satr 2-->
        
        <!--table1 satr 3--><tr>
        <td align="right" colspan="3"> آدرس:<font color="#FF0000"><strong>*</strong></font></td>
        </tr><!--table1 satr 3-->
        
        
        <!--table1 satr 4--><tr>
        <td align="right" colspan="3">
        <input type="text" value="" class="inputbox" style="width: 500px;" id="address" name="address">
        </td>
        </tr><!--table1 satr 4-->
        </tbody>
        </table><!--table1-->
        <hr />
        <table width="100%">
<tbody>

<!--table 2 satr1--><tr>
<td class="bkgry">نوع ملک</td>
<td class="bkgry"> نوع واگذاری </td>
<td class="bkgry">موقعیت </td>
</tr><!--table 2 satr1-->

<!--table 2 satr2--><tr>
<td>                                                      
   <select class="selectbox" name="noeMelk" id="noeMelk">
     <option value="0" selected="selected">نوع ملک</option>
        <?php foreach($type as $row):?>
         <option value="<?php echo $row->id; ?>"> <?php echo $row->title_noe_melk; ?> </option>
        <?php endforeach ?>
    </select>
<br>
<span style="display: inline-block; color: Red; font-size: small; font-weight: normal; width: 214px; visibility: hidden;">نوع ملک را وارد کنید</span>
</td>

<td>
<input type="checkbox" onchange="changeV(this);" value="1" class="rahn" name="status[]">رهن
<input type="checkbox" onchange="changeV(this);" value="2" class="ejare" name="status[]">اجاره
<input type="checkbox" onchange="changeV(this);" value="6" class="frosh" name="status[]">فروش
<input type="checkbox" onchange="changeV(this);" value="4" class="pishfrosh" name="status[]">پیش فروش
<input type="checkbox" onchange="changeV(this);" value="5" class="moaveze" name="status[]">معاوضه
</td>
                                            
<td>
<select class="selectbox"  name="mogheyat">
<option value=""></option>
<option value="شمالی">شمالی</option>
<option value="جنوبی">جنوبی</option>
<option value="شرقی">شرقی</option>
<option value="غربی">غربی</option>
<option value="دو نبش جنوبی">دو نبش جنوبی</option>
<option value="دو نبش شمالی">دو نبش شمالی</option>
<option value="شرقی غربی دو کله">شرقی غربی دو کله</option>
<option value="شمالی جنوبی دو کله">شمالی جنوبی دو کله</option>
<option value="سه نبش">سه نبش</option>
<option value="درب از حیاط">درب از حیاط</option>
<option value="درب از ساختمان">درب از ساختمان</option>
<option value="درب از حیاط و ساختمان">درب از حیاط و ساختمان</option>
<option value="جنوبی شرقی">جنوبی شرقی</option>
<option value="شمالی غربی">شمالی غربی</option>
<option value="سایر موارد">سایر موارد</option>
</select>
</td>
</tr><!--table 2 satr2-->


</tbody>
</table><!--table2-->
<hr />
<table width="100%">

<!--table3 satr 1--><tr>
<td class="bkgry"> قیمت هر متر مربع </td>
<td class="bkgry">قیمت کل</td>
</tr><!--table3 satr1-->

<!--table3 satr 2--><tr>
<td>
<input type="text" value="" class="inputbox" style="width:90px; float:right; margin-left:20px;" disabled="disabled" id="gheyamt_mm" name="gheyamt_mm">

<select name="mp_v" class="selectbox" style="width:100px;  margin-left:20px;"  disabled="disabled" onchange="m2changeText(this)" id="gheyamt_mm_v">
<option value="1">میلیون تومان</option>
<option value="2">هزار تومان</option>
</select>
</td>


<td>
<input type="text" value="" class="inputbox" style="width:90px; float:right; margin-left:20px;"  disabled="disabled" id="gheymat_kol" name="gheymat_kol">

<select name="kp_v" class="selectbox" style="width:100px"  onchange="sumpricechangeText(this)" disabled="disabled" id="gheymat_kol_v">
<option value="1">میلیون تومان</option>
<option value="2">میلیارد تومان</option>
</select>



</td>
</tr><!--table3 satr 2-->

<!--table3 satr 1--><tr>
<td class="bkgry">مبلغ رهن</td>
<td class="bkgry">مبلغ اجاره</td>
</tr><!--table3 satr1-->

<!--table3 satr 2--><tr>

<td>
<input type="text" value="" class="inputbox" style="width:90px; float:right; margin-left:20px;" disabled="disabled" id="rahn" name="rahn">

<select name="rp_v" class="selectbox" style="width:100px"  onchange="rahnpricechangeText(this)" disabled="disabled" id="rahn_v">
<option value="1">میلیون تومان</option>
<option value="2">هزار تومان</option>
</select>
</td>

<td>
<input type="text" value="" class="inputbox" style="width:90px; float:right; margin-left:20px;" disabled="disabled"  id="ejareh" name="ejareh">

<select name="ep_v" class="selectbox" style="width:100px"  onchange="leasepricechangeText(this)" disabled="disabled" id="ejareh_v">

<option value="1">میلیون تومان</option>
<option value="2">هزار تومان</option>
</select>



</td>
</tr><!--table3 satr 2-->

</table><!--table3-->
<hr />
<table width="100%">
<tr>
<td class="bkgry">مساحت زمین</td>
<td class="bkgry">زیربنا</td>
<td class="bkgry">طول بر</td>
<td class="bkgry">اصلاحی</td>
<td class="bkgry">متراژ تجاری</td>
</tr>

<tr>
<td><input type="text" value="" class="inputbox" style="width: 100px; text-align:right" name="masahat"  placeholder="متر مربع"></td>
<td><input type="text" value="" class="inputbox" style="width: 100px; text-align:right" name="zirbana"  placeholder="متر مربع"></td>
<td><input type="text" value="" class="inputbox" style="width: 100px; text-align:right" name="tool_bar"></td>
<td><input type="text" value="" class="inputbox" style="width: 100px; text-align:right" name="eslahi"  placeholder="متر مربع"></td>
<td><input type="text" value="" class="inputbox" style="width: 100px; text-align:right" name="t_metraj" placeholder="متر مربع"></td>

</tr>

</table><!--table 3+1-->
<hr />
<table width="100%">
<tr>
<td class="bkgry">تراکم</td>
<td class="bkgry">کاربری</td>
<td class="bkgry">معبر</td>
<td class="bkgry">وضعیت سند</td>
</tr>

<tr>
<td>
<select class="selectbox" style="width: 100px;" name="tarakom">
<option value=""></option>
<option value="کم">کم</option>
<option value="متوسط">متوسط</option>
<option value="زیاد">زیاد</option>
<option value="10%">10%</option>
<option value="20%">20%</option>
<option value="30%">30%</option>
<option value="40%">40%</option>
<option value="50%">50%</option>
<option value="60%">60%</option>
<option value="70%">70%</option>
<option value="80%">80%</option>
<option value="90%">90%</option>
<option value="100%">100%</option>
</select>
</td>

<td>
<select style="width: 100px;" class="selectbox" name="karbari">
<option value=""></option>
<?php foreach($karbary as $row):?>
	<option value="<?php echo $row->id ?>"><?php echo $row->title_karbary?></option>
<?php endforeach ?>
</select>
</td>

<td>
<select class="selectbox" name="mabar" style="width:100px;">
<option value=""></option>
<option value="4 متری">4 متری</option>
<option value="6 متری">6 متری</option>
<option value="8 متری">8 متری</option>
<option value="10 متری">10 متری</option>
<option value="12 متری">12 متری</option>
<option value="بر خیابان">بر خیابان</option>
</select>
</td>

<td>
<select style="width: 100px;" class="selectbox" name="sanad">
<option value=""></option>
<?php foreach($sanad as $row):?>
	<option><?php echo $row->title_sanad;?></option>
<?php endforeach?>
</select>
</td>

</tr>

</table><!--table 3+1-->
<hr />
<table width="100%">

<!--table4 satr 1--><tr>
<td class="bkgry">مجوز</td>
<td class="bkgry">نما</td>
<td class="bkgry">وضعیت سکونت</td>
<td class="bkgry">امتیازات</td>

</tr><!--table4 satr 1-->

<!--table4 satr 2--><tr>
<td>
<select class="selectbox" name="mojavez" style="width:60px;">
<option value=""></option>
<option value="M2">M2</option>
<option value="M3">M3</option>
<option value="M4">M4</option>
<option value="M5">M5</option>
<option value="M6">M6</option>
<option value="M7">M7</option>
<option value="M8">M8</option>
<option value="M9">M9</option>
<option value="M10">M10</option>
<option value="M11">M11</option>
<option value="M12">M12</option>
</select>
</td>

<td>
<select class="selectbox" name="nama">
<option value="-1"></option>
<?php foreach($nama as $row):?>
	<option><?php echo $row->title_nama?></option>
<?php endforeach?>
</select>
</td>

<td>
<input type="radio" value="مسکونی مالک" name="sokoonat">
<label>مسکونی مالک</label>
    
<input type="radio" value="در اجاره" name="sokoonat">
<label>در اجاره</label>
    
<input type="radio" value="تخلیه" name="sokoonat">
<label>تخلیه</label> 
</td>

<td>
<input type="checkbox" value="آب" name="emtiyaz1">
<label>آب</label>
    
<input type="checkbox" value="برق" name="emtiyaz2">
<label>برق</label>

<input type="checkbox" value="گاز" name="emtiyaz3">
<label>گاز</label>

<input type="checkbox" value="تلفن" name="emtiyaz4">
<label>تلفن</label>
</td>

</tr><!--table4 satr 2-->

</table><!--table4-->

<hr />
<table width="100%">
<tr>
<td  class="bkgry">مبلغ وام</td>
<td  class="bkgry">مبلغ اقساط</td>
<td  class="bkgry">تعداد اقساط پرداخت شده</td>
<td  class="bkgry">تعداد اقساط باقی مانده</td>
</tr>

<tr>
<td >
<input type="text" value="" class="inputbox" style="width: 80px; float:right; margin-left:10px;" id="vam" name="vam">

<select name="vam_select" class="selectbox" style="width: 100px;">
<option value="1">میلیون تومان</option>
<option value="2">هزار تومان</option>
</select>
</td>
<td >
<input type="text" value="" class="inputbox" style="width: 80px; float:right; margin-left:10px" id="vam" name="agsatVam">

<select name="agsat_vam_select" class="selectbox" style="width: 100px;">
<option value="2">هزار تومان</option>
<option value="1">میلیون تومان</option>
</select>
</td>
<td >
<input type="text" name="tap_v" style="width:90px" id="vp_v"/> ماه
</td>
<td >
<input type="text" name="tab_v" style="width:90px" id="vp_v"/> ماه
</td>
</tr>
</table><!--table4 + 1-->
<hr />
<table width="100%">

<!--table5 satr 1--><tr>
<td class="bkgry">طبقه</td>
<td class="bkgry">سن بنا</td>
<td class="bkgry">تعداد واحد ها</td>
<td class="bkgry">تعداد طبقات</td>
<td class="bkgry">تعداد خواب</td>
<td class="bkgry">متراژ تراس</td>
</tr><!--table5 satr 1-->

<!--table5 satr 2--><tr>
<td>
<select class="selectbox" style="width: 80px;" name="tabagheh">
<option value=""></option>
<option value="زیرزمین">زیرزمین</option>
<option value="پیلوت">پیلوت</option>
<option value="همکف">همکف</option>
<option value="اول">اول</option>
<option value="دوم">دوم</option>
<option value="سوم">سوم</option>
<option value="چهار">چهار</option>
<option value="پنجم">پنجم</option>
<option value="ششم">ششم</option>
<option value="هفتم">هفتم</option>
<option value="هشتم">هشتم</option>
<option value="نهم">نهم</option>
<option value="دهم">دهم</option>
</select>
</td>

                                                 
<td>
<select class="selectbox" style="width: 60px;" name="sen_bana">
<option value=""></option>
<option value="قدیمی">قدیمی</option>
<option value="صفر">صفر</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
</select>
</td>

<td>
<input type="text" class="inputbox" style="width:60px" size="5" value="" name="vahedha">   
</td>


<td>
<select class="selectbox" name="tabaghat" style="width:80px;">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10 و بالاتر">10 و بالاتر</option>
</select>
</td>

<td style="width: 5px;">
<select class="selectbox" style="width: 55px; margin:0 5px 0 5px;" name="khab">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</td>

<td>
<input type="text" value="" class="inputbox" style="width: 53px;" name="teras">
</td>

</tr><!--table5 satr 2-->

</table><!--table5-->


<!--table5--><table width="100%">

<!--table5 satr 1--><tr>
<td class="bkgry">کفپوش</td>
<td class="bkgry">تلفن</td>
<td class="bkgry">سرویس آشپزخانه</td>
<td class="bkgry">سرویس بهداشتی</td>
</tr><!--table5 satr 1-->

<!--table5 satr 2--><tr>

<td >
<select class="selectbox" style="width: 100px;" name="kafpoosh">
<option value=""></option>
<?php foreach($kafpoosh as $row):?>
	<option><?php echo $row->title_kafpoosh?></option>
<?php endforeach?>
</select>
</td>

<td >
<select class="selectbox" style="width: 100px;" name="telefon">
<option value=""></option>
<option value="ندارد">ندارد</option>
<option value="1خط">1خط</option>
<option value="2خط">2خط</option>
<option value="3خط">3خط</option>
<option value="4خط">4خط</option>
</select>
</td>

<td>
<?php echo kabinet_dropdown('service_ashpazkhaneh','','class="selectbox" style="width: 100px;" name="service_ashpazkhaneh"');?>
</td>

<td>
<select class="selectbox" style="width: 100px;" name="service_behdashti">
<option value=""></option>
<option value="ایرانی">ایرانی</option>
<option value="فرنگی">فرنگی</option>
<option value="ایرانی فرنگی">ایرانی فرنگی</option>
</select>
</td>
</tr><!--table5 satr 2-->

</table><!--table5-->

<table width="100%">

<!--table6 satr 1--><tr>
<td align="center" class="bkgry" colspan="9"><strong>امکانات</strong></td>
</tr><!--table6 satr 1-->

<!--table6 satr 2--><tr>

<td><input type="checkbox" value="آشپزخانه اپن" name="emkanat[]"> <label>آشپزخانه اپن</label></td>

<td><input type="checkbox" value="پارکینگ" name="emkanat[]"><label>پارکینگ</label></td>

<td><input type="checkbox" value="انباری" name="emkanat[]"><label>انباری</label></td>

<td><input type="checkbox" value="شومینه" name="emkanat[]"><label>شومینه</label></td>

<td><input type="checkbox" value="کولر" name="emkanat[]"><label>کولر</label></td>

<td><input type="checkbox" value="حیاط" name="emkanat[]"><label>حیاط</label></td>

<td><input type="checkbox" value="شوفاژ" name="emkanat[]"><label>شوفاژ</label></td>



</tr><!--table6 satr 2-->

<!--table6 satr 3--><tr>
<td><input type="checkbox" value="چیلر" name="emkanat[]"><label>چیلر</label></td>
<td><input type="checkbox" value="پکیج" name="emkanat[]"><label>پکیج</label></td>
<td><input type="checkbox" value="جکوزی" name="emkanat[]"><label>جکوزی</label></td>
<td><input type="checkbox" value="فن کوئل" name="emkanat[]"><label>فن کوئل</label></td>
<td><input type="checkbox" value="آبگرمکن" name="emkanat[]"><label>آبگرمکن</label></td>
<td><input type="checkbox" value="چوب کاری" name="emkanat[]"><label>چوب کاری</label></td>
<td><input type="checkbox" value="نور مخفی" name="emkanat[]"><label>نور مخفی</label></td>


</tr><!--table6 satr 3-->
    

<!--table6 satr 4--><tr>
<td><input type="checkbox" value="ریموت کنترل" name="emkanat[]"><label>ریموت کنترل</label></td>
<td><input type="checkbox" value="جارو مرکزی" name="emkanat[]"><label>جارو مرکزی</label></td>
<td><input type="checkbox" value="آنتن مرکزی" name="emkanat[]"><label>آنتن مرکزی</label></td>
<td><input type="checkbox" value="آیفون تصویری" name="emkanat[]"><label>آیفون تصویری</label></td>
<td><input type="checkbox" value="سیستم ایمنی" name="emkanat[]"><label>سیستم ایمنی</label></td>
<td><input type="checkbox" value="شوتینگ زباله" name="emkanat[]"><label>شوتینگ زباله</label></td>
<td><input type="checkbox" value="آسانسور" name="emkanat[]"><label>آسانسور</label></td>
</tr><!--table6 satr 4-->

<!--table6 satr 5--><tr>
<td><input type="checkbox" value="سرایداری" name="emkanat[]"><label>سرایداری</label></td>
<td><input type="checkbox" value="لابی" name="emkanat[]"><label>لابی</label></td>
<td><input type="checkbox" value="استخر" name="emkanat[]"><label>استخر</label></td>
<td><input type="checkbox" value="سونا" name="emkanat[]"><label>سونا</label></td>
<td><input type="checkbox" value="باربیکیو" name="emkanat[]"><label>باربیکیو</label></td>
<td><input type="checkbox" value="گچ بری" name="emkanat[]"><label>گچ بری</label></td>
<td><input type="checkbox" value="نقاشی" name="emkanat[]"><label>نقاشی</label></td>
</tr><!--table6 satr 5-->

</table><!--table6-->
<hr />
<table width="50%" align="left">
	<tr>
    	<td align="left">تاریخ اعتبار :</td>
        <td><input type="text" name="etebar" id="datepicker"/></td>
    </tr>
</table>

<table width="50%">
	<tr>
    	<td width="50px">تصویر 1 :</td>
        <td><?php echo form_upload('userfile','','class="f"') ?></td>
    </tr>
	<tr>
    	<td>تصویر 2 :</td>
        <td><?php echo form_upload('userfile1','','class="f"') ?></td>
    </tr>
	<tr>
    	<td>تصویر 3 :</td>
        <td><?php echo form_upload('userfile2','','class="f"') ?></td>
    </tr>
    <tr>
    	<td></td>
        <td><font color="#FF0000"> فايل تصويري ملک  باید با  پسوند JPG ,PNG ,GIF <br />و اندازه 200 کیلو بایت  تهيه شده باشد.</font></td>
    </tr>
</table>
<hr />
<table width="100%">
    <tr>
        <td class="bkgry">توضیحات</td>
    </tr>
    <tr>
        <td>
        <textarea style="max-width:700px !important; min-width:700px !important; height:80px" name="tozihat"></textarea>
        </td>
    </tr>
</table><!--table7-->
<hr />

<table width="100%">
<tr>
<td>
<input type="button" class="button" id="saveAdver" value="ثبت اطلاعات">
</td>
</tr>
</table>
<?php echo form_close();?>
        </div><!--body-->
<div style="clear:both"></div>


</div>

