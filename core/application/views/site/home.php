<script>
function changeV(i){
	switch(i.value){
		case "رهن":
			$('#rahn').attr('disabled', !i.checked);
			$('#rahn_v').attr('disabled', !i.checked);
			$('#ejareh').attr('disabled', i.checked);
			$('#ejareh_v').attr('disabled', i.checked);
			$('#gheymat_kol').attr('disabled', i.checked);
			$('#gheymat_kol_v').attr('disabled', i.checked);
			$('#gheyamt_mm').attr('disabled', i.checked);
			$('#gheyamt_mm_v').attr('disabled', i.checked);
		break
		case "اجاره":
			$('#ejareh').attr('disabled', !i.checked);
			$('#ejareh_v').attr('disabled', !i.checked);
			$('#rahn').attr('disabled', i.checked);
			$('#rahn_v').attr('disabled', i.checked);
			$('#gheymat_kol').attr('disabled', i.checked);
			$('#gheymat_kol_v').attr('disabled', i.checked);
			$('#gheyamt_mm').attr('disabled', i.checked);
			$('#gheyamt_mm_v').attr('disabled', i.checked);
		break
		case "فروش":
			$('#gheymat_kol').attr('disabled', !i.checked);
			$('#gheymat_kol_v').attr('disabled', !i.checked);
			$('#gheyamt_mm').attr('disabled', !i.checked);
			$('#gheyamt_mm_v').attr('disabled', !i.checked);
			$('#ejareh').attr('disabled', i.checked);
			$('#ejareh_v').attr('disabled', i.checked);
			$('#rahn').attr('disabled', i.checked);
			$('#rahn_v').attr('disabled', i.checked);
		break
		case "پیش فروش":
			$('#gheymat_kol').attr('disabled', !i.checked);
			$('#gheymat_kol_v').attr('disabled', !i.checked);
			$('#gheyamt_mm').attr('disabled', !i.checked);
			$('#gheyamt_mm_v').attr('disabled', !i.checked);
			$('#ejareh').attr('disabled', i.checked);
			$('#ejareh_v').attr('disabled', i.checked);
			$('#rahn').attr('disabled', i.checked);
			$('#rahn_v').attr('disabled', i.checked);
		break
		case "معاوضه":
			$('#gheymat_kol').attr('disabled', !i.checked);
			$('#gheymat_kol_v').attr('disabled', !i.checked);
			$('#gheyamt_mm').attr('disabled', !i.checked);
			$('#gheyamt_mm_v').attr('disabled', !i.checked);
			$('#ejareh').attr('disabled', i.checked);
			$('#ejareh_v').attr('disabled', i.checked);
			$('#rahn').attr('disabled', i.checked);
			$('#rahn_v').attr('disabled', i.checked);
		break
	}
}

</script>

<div class="mastermain">
<fieldset class="register_home" >
<legend class="subject">ثبت مشخصات ملک</legend>




<!--table1--><table  class="mytable">
<tbody>

<!--table1 satr 1--><tr>
<td class="bkgry">استان<font color="#FF0000"><strong>*</strong></font> </td>
<td class="bkgry">شهر	<font color="#FF0000"><strong>*</strong></font></td>
<td align="right" colspan="2" class="bkgry">منطقه<font color="#FF0000"><strong>*</strong></font> </td>
</tr><!--table1 satr 1-->


<!--table satr 2--><tr>
<td style="width: 100px;">
    <select id="tests" name="test" class="selectbox">
		<option value="">(انتخاب)</option>
		<?php foreach ($tests as $key => $test): ?>
		<option value="<?php echo $key; ?>"> <?php echo $test; ?> </option>
		<?php endforeach; ?>
	</select>
</td>

<td style="width: 100px;">
	<select id="categories" name="category" class="selectbox">
		<option value="">(انتخاب)</option>
	</select>
</td>

<td align="right" style="width: 100px;">

	<select id="contents" name="content" class="selectbox">
		<option value="">(انتخاب)</option>
	</select>
    
</td>
</tr><!--table1 satr 2-->

<!--table1 satr 3--><tr>
<td align="right" colspan="3"> آدرس:<font color="#FF0000"><strong>*</strong></font></td>
</tr><!--table1 satr 3-->


<!--table1 satr 4--><tr>
<td align="right" colspan="3">
<input type="text" value="" class="inputbox" style="width: 500px;" name="address">
</td>
</tr><!--table1 satr 4-->
</tbody>
</table><!--table1-->


<!--table2--><table class="mytable">
<tbody>

<!--table 2 satr1--><tr>
<td class="bkgry">نوع ملک</td>
<td class="bkgry"> نوع واگذاری </td>
<td class="bkgry">موقعیت </td>
</tr><!--table 2 satr1-->

<!--table 2 satr2--><tr>
<td>                                                      
   <select class="selectbox" name="noeMelk">
     <option value="" selected="selected">نوع ملک</option>
        <?php foreach($type as $row):?>
         <option value="<?php echo $row->id; ?>"> <?php echo $row->title_noe_melk; ?> </option>
        <?php endforeach ?>
    </select>
<br>
<span style="display: inline-block; color: Red; font-size: small; font-weight: normal; width: 214px; visibility: hidden;">نوع ملک را وارد کنید</span>
</td>

<td>
<input type="radio" onchange="changeV(this);" value="رهن" name="vaziyat[]">رهن
<input type="radio" onchange="changeV(this);" value="اجاره" name="vaziyat[]">اجاره
<input type="radio" onchange="changeV(this);" value="فروش" name="vaziyat[]">فروش
<input type="radio" onchange="changeV(this);" value="پیش فروش" name="vaziyat[]">پیش فروش
<input type="radio" onchange="changeV(this);" value="معاوضه" name="vaziyat[]">معاوضه
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


<!--table3--><table class="mytable">

<!--table3 satr 1--><tr>
<td class="bkgry"> قیمت هر متر مربع </td>
<td class="bkgry">قیمت کل</td>
<td class="bkgry">مبلغ رهن</td>
<td class="bkgry">مبلغ اجاره</td>
</tr><!--table3 satr1-->

<!--table3 satr 2--><tr>
<td>
<input type="text" value="" class="inputbox" style="width:90px" disabled="disabled"  onchange="m2changeText(this)" id="gheyamt_mm" name="gheyamt_mm">

<select name="mp_v" class="selectbox" style="width:100px; float:left ; margin-left:20px;"  disabled="disabled" onchange="m2changeText(this)" id="gheyamt_mm_v">
<option value="میلیون تومان">میلیون تومان</option>
<option value="هزار تومان">هزار تومان</option>
</select>



</td>


<td>
<select name="kp_v" class="selectbox" style="width:100px"  onchange="sumpricechangeText(this)" disabled="disabled" id="gheymat_kol_v">
<option value="میلیون تومان">میلیون تومان</option>
<option value="میلیارد تومان">میلیارد تومان</option>
</select>

<input type="text" value="" class="inputbox" style="width:90px"  disabled="disabled" onchange="sumpricechangeText(this)" id="gheymat_kol" name="gheymat_kol">

</td>

<td>
<select name="rp_v" class="selectbox" style="width:100px"  onchange="rahnpricechangeText(this)" disabled="disabled" id="rahn_v">
<option value="میلیون تومان">میلیون تومان</option>
<option value="هزار تومان">هزار تومان</option>
</select>

<input type="text" value="" class="inputbox" style="width:90px" onchange="rahnpricechangeText(this)" disabled="disabled" id="rahn" name="rahn">

</td>

<td>
<select name="ep_v" class="selectbox" style="width:100px"  onchange="leasepricechangeText(this)" disabled="disabled" id="ejareh_v">
<option value="هزار تومان">هزار تومان</option>
<option value="میلیون تومان">میلیون تومان</option>
</select>

<input type="text" value="" class="inputbox" style="width:90px" disabled="disabled" onchange="leasepricechangeText(this)" id="ejareh" name="ejareh">

</td>
</tr><!--table3 satr 2-->

</table><!--table3-->

<!--table 3+1--><table class="mytable">
<tr>
<td class="bkgry">مساحت زمین</td>
<td class="bkgry">زیربنا</td>
<td class="bkgry">تراکم</td>
<td class="bkgry">طول بر</td>
<td class="bkgry">کاربری</td>
<td class="bkgry">اصلاحی</td>
<td class="bkgry">معبر</td>
<td class="bkgry">وضعیت سند</td>
<td class="bkgry">متراژ تجاری</td>
</tr>

<tr>
<td><input type="text" value="" class="inputbox" style="width: 30px;" name="masahat">متر مربع </td>
<td><input type="text" value="" class="inputbox" style="width: 25px;" name="zirbana">متر مربع</td>
<td>
<select class="selectbox" style="width: 50px;" name="tarakom">
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

<td><input type="text" value="" class="inputbox" style="width: 30px;" name="tool_bar"></td>
<td>
<select style="width: 75px;" class="selectbox" name="karbari">
<option value=""></option>
<option value="مسکونی">مسکونی</option>
<option value="تجاری">تجاری</option>
<option value="اداری">اداری</option>
<option value="تجاری.مسکونی">تجاری.مسکونی</option>
<option value="تجاری.اداری">تجاری.اداری</option>
<option value="مسکونی.اداری">مسکونی.اداری</option>
<option value="ت . م . ا">ت . م . ا</option>
<option value="کشاورزی">کشاورزی</option>
<option value="صنعتی">صنعتی</option>
<option value="ورزشی">ورزشی</option>
<option value="فرهنگی">فرهنگی</option>
</select>
</td>

<td><input type="text" value="" class="inputbox" style="width: 30px;" name="eslahi">متر مربع</td>

<td>
<select class="selectbox" name="mabar">
<option value=""></option>
<option value="4 متری">4 متری</option>
<option value="6 متری">6 متری</option>
<option value="8 متری">8 متری</option>
<option value="10 متری">10 متری</option>
<option value="12 متری">12 متری</option>
</select>
</td>

<td>
<select style="width: 75px;" class="selectbox" name="sanad">
<option value=""></option>
<?php foreach($sanad as $row):?>
	<option><?php echo $row->title_sanad;?></option>
<?php endforeach?>
</select>
</td>

<td><input type="text" value="" class="inputbox" style="width: 25px;" name="t_metraj">متر مربع</td>

</tr>

</table><!--table 3+1-->


<!--table4--><table class="mytable">

<!--table4 satr 1--><tr>
<td class="bkgry">مجوز</td>
<td class="bkgry">نما</td>
<td class="bkgry">وضعیت سکونت</td>
<td class="bkgry">امتیازات</td>

</tr><!--table4 satr 1-->

<!--table4 satr 2--><tr>
<td>
<select class="selectbox" name="mojavez">
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
<select class="selectbox" name="nema">
<option value="-1"></option>
<?php foreach($nama as $row):?>
	<option><?php echo $row->title_nama?></option>
<?php endforeach?>
</select>
</td>

<td>
<input type="radio" value="مسکونی مالک" name="sokoonat[]">
<label>مسکونی مالک</label>
    
<input type="radio" value="در اجاره" name="sokoonat[]">
<label>در اجاره</label>
    
<input type="radio" value="تخلیه" name="sokoonat[]">
<label>تخلیه</label> 
</td>

<td>
<input type="checkbox" value="آب" name="emtiyaz[]">
<label>آب</label>
    
<input type="checkbox" value="برق" name="emtiyaz[]">
<label>برق</label>

<input type="checkbox" value="گاز" name="emtiyaz[]">
<label>گاز</label>

<input type="checkbox" value="تلفن" name="emtiyaz[]">
<label>تلفن</label>
</td>

</tr><!--table4 satr 2-->

</table><!--table4-->

<!--table4 + 1--><table class="mytable">
<tr>
<td  class="bkgry">مبلغ وام</td>
<td  class="bkgry">مبلغ اقساط</td>
<td  class="bkgry">تعداد اقساط پرداخت شده</td>
<td  class="bkgry">تعداد اقساط باقی مانده</td>
</tr>

<tr>
<td >
<input type="text" value="" onchange="vampricechangeText(this)" class="inputbox" style="width: 72px;" id="vam" name="vam">
<select onchange="vampricechangeText(this)" id="vp_v" name="vp_v" class="selectbox" style="width: 90px;">
<option value="میلیون تومان">میلیون تومان</option>
<option value="هزار تومان">هزار تومان</option>
</select>
</td>
<td >
<input type="text" value="" onchange="vampricechangeText(this)" class="inputbox" style="width: 72px;" id="vam" name="vam">
<select onchange="vampricechangeText(this)" id="vp_v" name="vp_v" class="selectbox" style="width: 90px;">
<option value="هزار تومان">هزار تومان</option>
<option value="میلیون تومان">میلیون تومان</option>
</select>
</td>
<td >

<select onchange="vampricechangeText(this)" id="vp_v" name="vp_v" class="selectbox" style="width: 90px;">
<option value="">انتخاب كنيد ...</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="2">3</option>
<option value="2">4</option>
<option value="2">5</option>
<option value="2">6</option>
<option value="2">7</option>
<option value="2">8</option>
<option value="2">9</option>
<option value="2">10</option>
</select>
</td>
<td >

<select onchange="vampricechangeText(this)" id="vp_v" name="vp_v" class="selectbox" style="width: 90px;">
<option value="">انتخاب كنيد ...</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="2">3</option>
<option value="2">4</option>
<option value="2">5</option>
<option value="2">6</option>
<option value="2">7</option>
<option value="2">8</option>
<option value="2">9</option>
<option value="2">10</option>
</select>
</td>
</tr>
</table><!--table4 + 1-->

<!--table5--><table class="mytable">

<!--table5 satr 1--><tr>
<td class="bkgry">طبقه</td>
<td class="bkgry">سن بنا</td>
<td class="bkgry">تعداد واحد ها</td>
<td class="bkgry">تعداد طبقات</td>
<td class="bkgry">تعداد خواب</td>
<td class="bkgry">متراژ تراس</td>
<td class="bkgry">کفپوش</td>
<td class="bkgry">تلفن</td>
<td class="bkgry">سرویس آشپزخانه</td>
<td class="bkgry">سرویس بهداشتی</td>
</tr><!--table5 satr 1-->

<!--table5 satr 2--><tr>
<td>
<select class="selectbox" style="width: 55px;" name="tabagheh">
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
<select class="selectbox" style="width: 55px;" name="sen_bana">
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
<input type="text" class="inputbox" style="width:50px" size="5" value="" name="vahedha">   
</td>


<td>
<select class="selectbox" name="tabaghat">
<option value="-1"></option>
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
<select class="selectbox" style="width: 55px;" name="khab">
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

<td style="width: 66px;">
<select class="selectbox" style="width: 100px;" name="kafpoosh">
<option value=""></option>
<?php foreach($kafpoosh as $row):?>
	<option><?php echo $row->title_kafpoosh?></option>
<?php endforeach?>
</select>
</td>

<td style="width: 3px;">
<select class="selectbox" style="width: 70px;" name="telefon">
<option value=""></option>
<option value="ندارد">ندارد</option>
<option value="1خط">1خط</option>
<option value="2خط">2خط</option>
<option value="3خط">3خط</option>
<option value="4خط">4خط</option>
</select>
</td>

<td style="width: 5px;">
<select class="selectbox" style="width: 90px;" name="service_ashpazkhaneh">
<option value=""></option>
<option value="MDF">MDF</option>
<option value="فلزی">فلزی</option>
<option value="چوبی">چوبی</option>
<option value="فایبرگلاس">فایبرگلاس</option>
<option value="دارد">دارد</option>
<option value="hpl">hpl</option>
<option value="ندارد">ندارد</option>
</select>
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

<!--table6--><table class="mytable">

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

<!--table7--><table class="mytable">
<tr>
<td class="bkgry">نوع آگهی</td>
<td class="bkgry">تصویر 1</td>
<td class="bkgry">تصویر 2</td>
<td class="bkgry">تصویر 3</td>
</tr>

<tr>
<td>

<select class="selectbox" name="ads_type">
<option checked="" value="0"></option>
<option value="1">1 ماه 10.000 تومان</option>
<option value="2">2 ماهه 20.000 تومان</option>
<option value="3">3 ماهه 30.000 تومان</option>
<option value="4">4 ماهه 60.000 تومان</option>
</select>
</td>

<td>

</td>

<td>

</td>

<td>

</td>

</tr>


</table><!--table7-->

<table class="mytable">
<tr>
<td>
<input type="button" class="button" value="ثبت اطلاعات" onclick="javascript:submitbutton('saveguestprop');">
</td>
</tr>
</table>
</fieldset>
<!--</div>--><!--register_home-->

</div><!--mastermain-->