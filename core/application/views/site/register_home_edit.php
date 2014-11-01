<script type="text/javascript" src="<?php echo site_url('assets/site/js/register_home_edit.js')?>"></script>
<style>
hr{
	border:1px dotted #CCC ;
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
	height:1090px;
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

        <?php echo form_open_multipart('register_home/update','id="form"');?>
        <input value="<?php echo $idUser ?>" name="idUser" type="hidden" />
        <input value="<?php echo $idHome?>" name="idHome" type="hidden" />
        <table width="100%">
        <tbody>
        
        <!--table1 satr 1--><tr>
        <td class="bkgry">استان<font color="#FF0000"><strong>*</strong></font> </td>
        <td class="bkgry">شهر	<font color="#FF0000"><strong>*</strong></font></td>
        <td align="right" colspan="2" class="bkgry">منطقه<font color="#FF0000"><strong>*</strong></font> </td>
        </tr><!--table1 satr 1-->
        
        
        <!--table satr 2--><tr>
        <td style="width: 100px;">
			<?php echo ostan_dropdown('ostan',$ostan,$id_ostan,'class="selectbox" id="tests"')?> 
        </td>
        
        <td style="width: 100px;">
			<?php echo shahrestan_dropdown('category',$shahrestan,$id_shahrestan,'class="selectbox" id="categories"')?> 
        </td>
        
        <td align="right" style="width: 100px;">
        	<?php echo mantage_dropdown('content',$mantage,$id_mantage,'class="selectbox" id="contents"')?> 
        </td>
        </tr><!--table1 satr 2-->
        
        <!--table1 satr 3--><tr>
        <td align="right" colspan="3"> آدرس:<font color="#FF0000"><strong>*</strong></font></td>
        </tr><!--table1 satr 3-->
        
        
        <!--table1 satr 4--><tr>
        <td align="right" colspan="3">
        <input type="text" value="<?php echo $address; ?>" class="inputbox" style="width: 500px;" id="address" name="address">
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
	<?php echo noeMelk_dropdown('noeMelk',$type,$id_noeMelk,'class="selectbox" id="noeMelk"')?> 
<br>
<span style="display: inline-block; color: Red; font-size: small; font-weight: normal; width: 214px; visibility: hidden;">نوع ملک را وارد کنید</span>
</td>

<td>
<?php echo vazeyat_khane($code);?>

</td>
                                            
<td>
<?php echo  mogheyat_dropdown('mogheyat',$mogheyat,' class="selectbox"');?>
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
<input type="text" value="<?php echo $min_geymat;?>" class="inputbox" style="width:90px; float:right; margin-left:20px;" disabled="disabled" id="gheyamt_mm" name="gheyamt_mm">

<select name="mp_v" class="selectbox" style="width:100px;  margin-left:20px;"  disabled="disabled" onchange="m2changeText(this)" id="gheyamt_mm_v">
<option value="1">میلیون تومان</option>
<option value="2">هزار تومان</option>
</select>
</td>


<td>
<input type="text" value="<?php echo $max_geymat;?>" class="inputbox" style="width:90px; float:right; margin-left:20px;"  disabled="disabled" id="gheymat_kol" name="gheymat_kol">

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
<input type="text" value="<?php echo $min_rahn;?>" class="inputbox" style="width:90px; float:right; margin-left:20px;" disabled="disabled" id="rahn" 
name="rahn">

<select name="rp_v" class="selectbox" style="width:100px"  onchange="rahnpricechangeText(this)" disabled="disabled" id="rahn_v">
<option value="1">میلیون تومان</option>
<option value="2">هزار تومان</option>
</select>
</td>

<td>
<input type="text" value="<?php echo $min_ejare;?>" class="inputbox" style="width:90px; float:right; margin-left:20px;" disabled="disabled"  id="ejareh" name="ejareh">

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
<td><input type="text" value="<?php echo $masahat;?>" class="inputbox" style="width: 100px; text-align:right" name="masahat"  placeholder="متر مربع"></td>
<td><input type="text" value="<?php echo $zirbana;?>" class="inputbox" style="width: 100px; text-align:right" name="zirbana"  placeholder="متر مربع"></td>
<td><input type="text" value="<?php echo $tool_bar;?>" class="inputbox" style="width: 100px; text-align:right" name="tool_bar"></td>
<td><input type="text" value="<?php echo $eslahi;?>" class="inputbox" style="width: 100px; text-align:right" name="eslahi"  placeholder="متر مربع"></td>
<td><input type="text" value="<?php echo $t_metraj;?>" class="inputbox" style="width: 100px; text-align:right" name="t_metraj" placeholder="متر مربع"></td>

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
<?php echo tarakom_dropdown('tarakom',$tarakom,'class="selectbox" style="width: 100px;"');?>
</td>

<td>
<?php echo karbari_dropdown('karbari',$karbary,$karbari,'class="selectbox" style="width: 100px;"');?>
</td>
<td>
<?php echo mabar_dropdown('mabar',$mabar,'style="width:100px;" class="selectbox"');?>
</td>

<td>
<?php echo sanad_dropdown('sanad',$sanad,$id_sanad,'style="width:100px;" class="selectbox"');?>
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
<?php echo mojavez_dropdown('mojavez',$mojavez,'class="selectbox" style="width:60px;"');?>
</td>

<td>
<?php echo nama_dropdown('nama',$nama,$id_nama,'class="selectbox"');?>
</td>

<td>
<input type="radio" value="مسکونی مالک" name="sokoonat" <?php if($sokoonat == 'مسکونی مالک'){ echo'checked="checked"'; }?>>
<label>مسکونی مالک</label>
    
<input type="radio" value="در اجاره" name="sokoonat" <?php if($sokoonat == 'در اجاره'){ echo'checked="checked"'; }?>>
<label>در اجاره</label>
    
<input type="radio" value="تخلیه" name="sokoonat" <?php if($sokoonat == 'تخلیه'){ echo'checked="checked"'; }?>>
<label>تخلیه</label> 
</td>

<td>
<input type="checkbox" value="آب" name="emtiyaz1" <?php if($emtiyaz1 == '1'){ echo'checked="checked"'; }?>>
<label>آب</label>
    
<input type="checkbox" value="برق" name="emtiyaz2" <?php if($emtiyaz2 == '2'){ echo'checked="checked"'; }?>>
<label>برق</label>

<input type="checkbox" value="گاز" name="emtiyaz3" <?php if($emtiyaz3 == '3'){ echo'checked="checked"'; }?>>
<label>گاز</label>

<input type="checkbox" value="تلفن" name="emtiyaz4" <?php if($emtiyaz4 == '4'){ echo'checked="checked"'; }?>>
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
<input type="text" value="<?php echo $vam;?>" class="inputbox" style="width: 80px; float:right; margin-left:10px;" id="vam" name="vam">

<select name="vam_select" class="selectbox" style="width: 100px;">
<option value="1">میلیون تومان</option>
<option value="2">هزار تومان</option>
</select>
</td>
<td >
<input type="text" value="<?php echo $agsat;?>" class="inputbox" style="width: 80px; float:right; margin-left:10px" id="vam" name="agsatVam">

<select name="agsat_vam_select" class="selectbox" style="width: 100px;">
<option value="2">هزار تومان</option>
<option value="1">میلیون تومان</option>
</select>

</td>
<td >

<input type="text" name="tap_v" style="width:90px" id="vp_v" value="<?php echo $tap?>"/> ماه
</td>
<td >
<input type="text" name="tab_v" style="width:90px" id="vp_v" value="<?php echo $tab?>"/> ماه

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
<?php echo tabagheh_dropdown('tabagheh',$tabagheh,'class="selectbox" style="width: 80px;"');?>
</td>

                                                 
<td>
<?php echo senBana_dropdown('sen_bana',$sen_bana,'class="selectbox" style="width: 90px;"');?>
</td>

<td>
<input type="text" class="inputbox" style="width:60px" size="5" value="<?php echo $vahedha?>" name="vahedha">   
</td>


<td>
<?php echo tabaghat_dropdown('tabaghat',$tabaghat,'class="selectbox" style="width: 90px;"');?>
</td>

<td style="width: 5px;">
<?php echo khab_dropdown('khab',$khab,'class="selectbox" style="width: 55px; margin:0 5px 0 5px;"');?>
</td>

<td>
<input type="text" value="<?php echo $teras;?>" class="inputbox" style="width: 53px;" name="teras">
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
<?php echo kafpoosh_dropdown('kafpoosh',$kafpoosh,$id_kafpoosh,'class="selectbox" style="width: 100px;"')?>
</td>

<td >
<?php echo tell_dropdown('telefon',$telefon,'class="selectbox" style="width: 100px;"')?>
</td>

<td>
<?php echo kabinet_dropdown('service_ashpazkhaneh',$service_ashpazkhaneh,'class="selectbox" style="width: 100px;" name="service_ashpazkhaneh"');?>
</td>

<td>
<?php echo service_behdashti_dropdown('service_behdashti',$service_behdashti,'class="selectbox" style="width: 100px;"')?>
</td>
</tr><!--table5 satr 2-->

</table><!--table5-->

<table width="100%">

<!--table6 satr 1--><tr>
<td align="center" class="bkgry" colspan="9"><strong>امکانات</strong></td>
</tr><!--table6 satr 1-->

<!--table6 satr 2--><tr>

<td><input type="checkbox" value="آشپزخانه اپن" name="emkanat[]" <?php echo $em ?>> <label>آشپزخانه اپن</label>
 </td>

<td><input type="checkbox" value="پارکینگ" name="emkanat[]" <?php echo $em1 ?>><label>پارکینگ</label></td>

<td><input type="checkbox" value="انباری" name="emkanat[]" <?php echo $em2 ?>><label>انباری</label></td>

<td><input type="checkbox" value="شومینه" name="emkanat[]" <?php echo $em3 ?>><label>شومینه</label></td>

<td><input type="checkbox" value="کولر" name="emkanat[]" <?php echo $em4 ?>><label>کولر</label></td>

<td><input type="checkbox" value="حیاط" name="emkanat[]" <?php echo $em5 ?>><label>حیاط</label></td>

<td><input type="checkbox" value="شوفاژ" name="emkanat[]" <?php echo $em6 ?>><label>شوفاژ</label></td>



</tr><!--table6 satr 2-->

<!--table6 satr 3--><tr>
<td><input type="checkbox" value="چیلر" name="emkanat[]" <?php echo $em7 ?>><label>چیلر</label></td>
<td><input type="checkbox" value="پکیج" name="emkanat[]" <?php echo $em8 ?>><label>پکیج</label></td>
<td><input type="checkbox" value="جکوزی" name="emkanat[]" <?php echo $em9 ?>><label>جکوزی</label></td>
<td><input type="checkbox" value="فن کوئل" name="emkanat[]" <?php echo $em10 ?>><label>فن کوئل</label></td>
<td><input type="checkbox" value="آبگرمکن" name="emkanat[]" <?php echo $em11 ?>><label>آبگرمکن</label></td>
<td><input type="checkbox" value="چوب کاری" name="emkanat[]" <?php echo $em12 ?>><label>چوب کاری</label></td>
<td><input type="checkbox" value="نور مخفی" name="emkanat[]" <?php echo $em13 ?>><label>نور مخفی</label></td>


</tr><!--table6 satr 3-->
    

<!--table6 satr 4--><tr>
<td><input type="checkbox" value="ریموت کنترل" name="emkanat[]" <?php echo $em14 ?>><label>ریموت کنترل</label></td>
<td><input type="checkbox" value="جارو مرکزی" name="emkanat[]" <?php echo $em15 ?>><label>جارو مرکزی</label></td>
<td><input type="checkbox" value="آنتن مرکزی" name="emkanat[]" <?php echo $em16 ?>><label>آنتن مرکزی</label></td>
<td><input type="checkbox" value="آیفون تصویری" name="emkanat[]" <?php echo $em17 ?>><label>آیفون تصویری</label></td>
<td><input type="checkbox" value="سیستم ایمنی" name="emkanat[]" <?php echo $em18 ?>><label>سیستم ایمنی</label></td>
<td><input type="checkbox" value="شوتینگ زباله" name="emkanat[]" <?php echo $em19 ?>><label>شوتینگ زباله</label></td>
<td><input type="checkbox" value="آسانسور" name="emkanat[]" <?php echo $em20 ?>><label>آسانسور</label></td>
</tr><!--table6 satr 4-->

<!--table6 satr 5--><tr>
<td><input type="checkbox" value="سرایداری" name="emkanat[]" <?php echo $em21 ?>><label>سرایداری</label></td>
<td><input type="checkbox" value="لابی" name="emkanat[]" <?php echo $em22 ?>><label>لابی</label></td>
<td><input type="checkbox" value="استخر" name="emkanat[]" <?php echo $em23 ?>><label>استخر</label></td>
<td><input type="checkbox" value="سونا" name="emkanat[]" <?php echo $em24 ?>><label>سونا</label></td>
<td><input type="checkbox" value="باربیکیو" name="emkanat[]" <?php echo $em25 ?>><label>باربیکیو</label></td>
<td><input type="checkbox" value="گچ بری" name="emkanat[]" <?php echo $em26 ?>><label>گچ بری</label></td>
<td><input type="checkbox" value="نقاشی" name="emkanat[]" <?php echo $em27 ?>><label>نقاشی</label></td>
</tr><!--table6 satr 5-->

</table><!--table6-->
<hr />
<?php if($ads == 'no'):?>
<table width="50%" align="left">
	<tr>
    	<td align="left">تاریخ اعتبار :</td>
        <td><input type="text" name="etebar" id="datepicker" value="<?php echo $etebar;?>"/></td>
    </tr>
</table>
<?php endif ?>
<table width="100%">
<?php if($count != 0):?>
	<?php for($i = 1; $i <= $count; $i++):?>
	<tr>
    	<td width="50px">تصویر :</td>
        <td><?php echo form_upload("userfile$i",'','class="f"') ?></td>
    </tr>
    <?php endfor ?>
    <?php else:?>
	<tr>
    	<td width="50px"></td>
        <td><font color="#FF0000">برای آپلود عکس باید یکی از عکس ها را حذف کنید.</font></td>
    </tr>
<?php endif ?>  
    <tr>
    	<td></td>
        <td><font color="#FF0000"> فايل تصويري ملک  باید با  پسوند JPG ,PNG ,GIF <br />و اندازه 200 کیلو بایت  تهيه شده باشد.</font></td>
    </tr>  
</table>
<table width="100%">
	<tr>
		<?php foreach($images as $row):?>
            <td>
                <img width="150px" src="<?php echo site_url('images/home/'.$row->name.'')?>"/>
                <a href="<?php echo site_url('register_home/delete_image/'.$row->id.'');?>">
                <img src="<?php echo site_url('assets/site/img/delete.png')?>" /></a>
            </td>
        <?php endforeach?>
    </tr>
</table>

<!-- <hr /><table width="100%">
    <tr>
        <td class="bkgry">توضیحات</td>
    </tr>
    <tr>
        <td>
        <textarea style="max-width:700px !important; min-width:700px !important; height:80px" name="tozihat"><?php echo $tozihat; ?></textarea>
        </td>
    </tr>
</table>-->
<hr />



<table width="100%">
<tr>
<td>
<input type="button" class="button" id="saveHome" value="ثبت اطلاعات">
</td>
</tr>
</table>
<?php echo form_close();?>
        </div><!--body-->
<div style="clear:both"></div>

    </div>

</div>

