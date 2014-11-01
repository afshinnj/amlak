<?php
function btn_edit ($uri)
{
	return anchor($uri, '<i class="icon-edit"></i>');
}

function btn_delete ($uri)
{
	return anchor($uri, '<i class="icon-trash"></i>', array(
		'onclick' => "return confirm('این رکورد بعد از حذف قابل برگشت نیست . آیا از حذف مطمئن هستید.?');"
	));
}

function btn_check ($uri)
{
	return anchor($uri, '<i class="icon-check"></i>');	
}

function btn_uncheck ($uri)
{
	return anchor($uri, '<i class="icon-remove"></i>');	
}

function btn_restore ($uri)
{
	return anchor($uri, '<i class="icon-repeat"></i>');	
}

function btn_archive ($uri)
{
	return anchor($uri, '<i class="icon-briefcase"></i>');	
}

function btn_new ($uri)
{
	return anchor($uri, '<i class="btn btn-primary">جدید</i>');	
}

function btn_download($uri){
	
	return anchor($uri,'<i class="icon-download-alt"></i>');
}

function btn_restor($uri){
	
	return anchor($uri,'<i class="icon-repeat"></i>');
}
	
function ostan_dropdown($name = NULL, $data = array(), $selected = NULL, $attr = NULL)
{
	$array = array(''=>'(انتخاب)');
	foreach ($data as $filde) {
	   $array[$filde->id] = $filde->name;
	} 
	return form_dropdown($name, $array, $selected, $attr);

}

function shahrestan_dropdown($name = NULL, $data = array(), $selected = NULL, $attr = NULL)
{
	$array = array();
	foreach ($data as $filde) {
	   $array[$filde->id] = $filde->name;
	} 
	return form_dropdown($name, $array, $selected, $attr);
	
}

function mantage_dropdown($name = NULL, $data = array(), $selected = NULL, $attr = NULL)
{
	$array = array();
	foreach ($data as $filde) {
	   $array[$filde->id] = $filde->name;
	} 
	return form_dropdown($name, $array, $selected, $attr);
	
}

function noeMelk_dropdown($name = NULL, $data = array(), $selected = NULL, $attr = NULL)
{
	$array = array();
	foreach ($data as $filde) {
	   $array[$filde->id] = $filde->title_noe_melk;
	} 
	return form_dropdown($name, $array, $selected, $attr);
	
}

function kabinet_dropdown($name = NULL, $selected = NULL, $attr = NULL)
{
	$CI =& get_instance();
	$data = $CI->model_kabinet->get();
	  $array = array(''=>'','ندارد'=>'ندارد');
	foreach ($data as $filde) {
	   $array[$filde->title_kabinet] = $filde->title_kabinet;
	} 
	return form_dropdown($name, $array, $selected, $attr);
	
}
function price_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  '0'=>'',
                  '100تومان'=> '100 تومان',
                  '500تومان'=> '500 تومان',
                  '1ميليون' => '1 ميليون',
                  '2ميليون' => '2 ميليون',
				  '3ميليون' => '3 ميليون',
				  '4ميليون' => '4 ميليون',
				  '5ميليون' => '5 ميليون',
				  '6ميليون' => '6 ميليون',
				  '7ميليون' => '7 ميليون',
				  '8ميليون' => '8 ميليون',
				  '9ميليون' => '9 ميليون',
				  '10ميليون' => '10 ميليون',
				  '11ميليون' => '11 ميليون',
				  '12ميليون' => '12 ميليون',
				  '13ميليون' => '13 ميليون',
				  '14ميليون' => '14 ميليون',
				  '15ميليون' => '15 ميليون',
				  '16ميليون' => '16 ميليون',
				  '17ميليون' => '17 ميليون',
				  '18ميليون' => '18 ميليون',
				  '19ميليون' => '19 ميليون',
				  '20ميليون' => '20 ميليون',
				  '21ميليون' => '21 ميليون',
				  '22ميليون' => '22 ميليون',
				  '23ميليون' => '23 ميليون',
				  '24ميليون' => '24 ميليون',
				  '25ميليون' => '25 ميليون',
				  '26ميليون' => '26 ميليون',
				  '27ميليون' => '27 ميليون',
				  '28ميليون' => '28 ميليون',
				  '29ميليون' => '29 ميليون',
				  '30ميليون' => '30 ميليون',
				  '31ميليون' => '31 ميليون',
				  '32ميليون' => '32 ميليون',
				  '33ميليون' => '33 ميليون',
				  '34ميليون' => '34 ميليون',
				  '35ميليون' => '35 ميليون',
				  '40ميليون' => '40 ميليون',
				  '45ميليون' => '45 ميليون',
				  '50ميليون' => '50 ميليون',
				  '55ميليون' => '55 ميليون',
				  '60ميليون' => '60 ميليون',
				  '65ميليون' => '65 ميليون',
				  '70ميليون' => '70 ميليون',
				  '75ميليون' => '75 ميليون',
				  '80ميليون' => '80 ميليون',
				  '85ميليون' => '85 ميليون',
				  '90ميليون' => '90 ميليون',
				  '95ميليون' => '95 ميليون',
				  '100ميليون' => '100 ميليون',
				  
                );
	return form_dropdown($name, $options, $selected, $attr);
	}
	
function metraj_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  '0'=>'',
                  'کمتر از 50 متر'=> 'کمتر از 50 متر',
                  'از 50 تا 60 متر'=> 'از 50 تا 60 متر',
                  'از 60 تا 70 متر' => 'از 60 تا 70 متر',
                  'از 70 تا 80 متر' => 'از 70 تا 80 متر',
				  'از 80 تا 90 متر' => 'از 80 تا 90 متر',
				  'از 90 تا 100 متر' => 'از 90 تا 100 متر',
				  'از 100 تا 120 متر' => 'از 100 تا 120 متر',
				  'از 120 تا 140 متر' => 'از 120 تا 140 متر',
				  'از 140 تا 170 متر' => 'از 140 تا 170 متر',
				  'از 170 تا 200 متر' => 'از 170 تا 200 متر',
				  'بيشتر از 200 متر' => 'بيشتر از 200 متر'
                );
	return form_dropdown($name, $options, $selected, $attr);
	}

function senBana_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  '0'=>'',
                    'قدیمی'=> 'قدیمی',
    				'صفر'=>'صفر',
					'1'=>'1',
					'2'=>'2',
					'3'=>'3',
					'4'=>'4',
					'5'=>'5',
					'6'=>'6',
					'7'=>'7',
					'8'=>'8',
					'9'=>'9',
					'10'=>'10',
					'11'=>'11',
					'12'=>'12',
					'13'=>'13',
					'14'=>'14',
					'15'=>'15',
					'16'=>'16',
					'17'=>'17',
					'18'=>'18',
					'19'=>'19',
					'20'=>'20',
					'21'=>'21',
					'22'=>'22',
					'23'=>'23',
					'24'=>'24',
					'25'=>'25'
                );
	return form_dropdown($name, $options, $selected, $attr);
	}
	
function mogheyat_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  ''=>'',
                    'شمالی'=> 'شمالی',
    				'جنوبی'=>'جنوبی',
					'شرقی'=>'شرقی',
					'غربی'=>'غربی',
					'دو نبش جنوبی'=>'دو نبش جنوبی',
					'دو نبش شمالی'=>'دو نبش شمالی',
					'شرقی غربی دو کله'=>'شرقی غربی دو کله',
					'شمالی جنوبی دو کله'=>'شمالی جنوبی دو کله',
					'سه نبش'=>'سه نبش',
					'درب از حیاط'=>'درب از حیاط',
					'درب از ساختمان'=>'درب از ساختمان',
					'درب از حیاط و ساختمان'=>'درب از حیاط و ساختمان',
					'جنوبی شرقی'=>'جنوبی شرقی',
					'شمالی غربی'=>'شمالی غربی',
					'سایر موارد'=>'سایر موارد'
                );
	return form_dropdown($name, $options, $selected, $attr);
	}	
	
function tarakom_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  ''=>'',
                    'کم'=> 'کم',
    				'متوسط'=>'متوسط',
					'زیاد'=>'زیاد',
					'10%'=>'10%',
					'20%'=>'20%',
					'30%'=>'30%',
					'40%'=>'40%',
					'50%'=>'50%',
					'60%'=>'60%',
					'70%'=>'70%',
					'80%'=>'80%',
					'90%'=>'90%',
					'100%'=>'100%'
                );
	return form_dropdown($name, $options, $selected, $attr);
	}

function mabar_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  ''=>'',
                    '4 متری'=> '4 متری',
    				'6 متری'=>'6 متری',
					'8 متری'=>'8 متری',
					'10 متری'=>'10 متری',
					'12 متری'=>'12 متری',
					'بر خیابان'=>'بر خیابان'
					
					);
	return form_dropdown($name, $options, $selected, $attr);
	}
	
function mojavez_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  ''=>'',
                    'M2'=> 'M2',
					'M3'=> 'M3',
					'M4'=> 'M4',
					'M5'=> 'M5',
					'M6'=> 'M6',
					'M7'=> 'M7',
					'M8'=> 'M8',
					'M9'=> 'M9',
					'M10'=> 'M10',
					'M11'=> 'M11',
					'M12'=> 'M12',

					);
	return form_dropdown($name, $options, $selected, $attr);
	}
	
function tabagheh_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  ''=>'',
                    'زیرزمین'=> 'زیرزمین',
					'پیلوت'=> 'پیلوت',
					'همکف'=> 'همکف',
					'اول'=> 'اول',
					'دوم'=> 'دوم',
					'سوم'=> 'سوم',
					'چهار'=> 'چهار',
					'پنجم'=> 'پنجم',
					'ششم'=> 'ششم',
					'هفتم'=> 'هفتم',
					'هشتم'=> 'هشتم',
					'نهم'=> 'نهم',
					'دهم'=> 'دهم'
					);
	return form_dropdown($name, $options, $selected, $attr);
	}	
function tabaghat_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  ''=>'',
					'1'=>'1',
					'2'=>'2',
					'3'=>'3',
					'4'=>'4',
					'5'=>'5',
					'6'=>'6',
					'7'=>'7',
					'8'=>'8',
					'9'=>'9',
					'10 و بالاتر'=>'10 و بالاتر'
                );
	return form_dropdown($name, $options, $selected, $attr);
	}

function khab_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  ''=>'',
					'1'=>'1',
					'2'=>'2',
					'3'=>'3',
					'4'=>'4',
					'5'=>'5'
                );
	return form_dropdown($name, $options, $selected, $attr);
	}
	
function tell_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  ''=>'',
					'ندارد'=>'ندارد',
					'1خط'=>'1خط',
					'2خط'=>'2خط',
					'3خط'=>'3خط',
					'4خط'=>'4خط'
                );
	return form_dropdown($name, $options, $selected, $attr);
	}
	
function service_ashpazkhaneh_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  ''=>'',
					'MDF'=>'MDF',
					'فلزی'=>'فلزی',
					'چوبی'=>'چوبی',
					'فایبرگلاس'=>'فایبرگلاس',
					'hpl'=>'hpl',
					'دارد'=>'دارد',
					'ندارد'=>'ندارد'
                );
	return form_dropdown($name, $options, $selected, $attr);
	}
	
function service_behdashti_dropdown($name = NULL, $selected = NULL, $attr = NULL){
	$options = array(
				  ''=>'',
					'ایرانی'=>'ایرانی',
					'فرنگی'=>'فرنگی',
					'ایرانی فرنگی'=>'ایرانی فرنگی'
                );
	return form_dropdown($name, $options, $selected, $attr);
	}
								
function karbari_dropdown($name = NULL, $data = array(), $selected = NULL, $attr = NULL)
{
	$array = array(''=>'');
	foreach ($data as $filde) {
	   $array[$filde->id] = $filde->title_karbary;
	} 
	return form_dropdown($name, $array, $selected, $attr);
	
}	

function sanad_dropdown($name = NULL, $data = array(), $selected = NULL, $attr = NULL)
{
	$array = array(''=>'');
	foreach ($data as $filde) {
	   $array[$filde->title_sanad] = $filde->title_sanad;
	} 
	return form_dropdown($name, $array, $selected, $attr);
}	

function nama_dropdown($name = NULL, $data = array(), $selected = NULL, $attr = NULL)
{
	$array = array(''=>'');
	foreach ($data as $filde) {
	   $array[$filde->title_nama] = $filde->title_nama;
	} 
	return form_dropdown($name, $array, $selected, $attr);
}

function kafpoosh_dropdown($name = NULL, $data = array(), $selected = NULL, $attr = NULL)
{
	$array = array(''=>'');
	foreach ($data as $filde) {
	   $array[$filde->title_kafpoosh] = $filde->title_kafpoosh;
	} 
	return form_dropdown($name, $array, $selected, $attr);
}


function status($code)
{
	$CI =& get_instance();
	$array = array();
	$home_status= $CI->model_home_status->get_by(array('code'=>$code));
	foreach ($home_status as $row ){										
		 $data = $CI->model_status->get_by(array('id'=>$row->status_id));
		 foreach($data as $row){
			 echo $row->title_vagozary .' ';
			 }
		}
}

function price($code)
{
	$CI =& get_instance();
	
	$min_price = $CI->model_min_price->get_by(array('code'=>$code));
	foreach($min_price as $row){
		$min_rahn = $row->min_rahn .'  هزار تومان';
		$min_ejare = $row->min_ejare .'  هزار تومان';
		$min_geymat = $row->min_geymat .'  هزار تومان';
		$max_rahn = $row->max_rahn .'  هزار تومان';
		$max_ejare = $row->max_ejare .'  هزار تومان';
		$max_geymat = $row->max_geymat .'  هزار تومان';
		}
		
	$max_price = $CI->model_max_price->get_by(array('code'=>$code));
	foreach ($max_price as $row ){
		$min_rahn1 = $row->min_rahn .'   میلیون تومان ';
		$min_ejare1 = $row->min_ejare .'   میلیون تومان';
		$min_geymat1 = $row->min_geymat  .'   میلیون تومان ';
		$max_rahn1 = $row->max_rahn .'   میلیون تومان';
		$max_ejare1 = $row->max_ejare .'   میلیون تومان';
		$max_geymat1 = $row->max_geymat .'   میلیون تومان';
		}
		
		/*---- رهن ----*/
		if($min_rahn != 0 ){ echo "حداقل رهن : $min_rahn ".'<hr>'; }
		if($min_rahn1 != 0){ $min_rahn = $min_rahn1; echo "حداقل رهن : $min_rahn ".'<hr>';}
		if($max_rahn != 0 ){ echo "حداکثر رهن : $max_rahn ".'<hr>'; }
		if($max_rahn1 != 0){ $max_rahn = $max_rahn1; echo "حداکثر رهن : $max_rahn ".'<hr>';}
		
		/*---- اجاره ----*/		
		if($min_ejare != 0 ){ echo "حداقل اجاره : $min_ejare ".'<hr>'; }
		if($min_ejare1 != 0){ $min_ejare = $min_ejare1; echo "حداقل اجاره : $min_ejare ".'<hr>';}			
		if($max_ejare != 0 ){ echo "حداکثر اجاره : $max_ejare ".'<hr>'; }
		if($max_ejare1 != 0){ $max_ejare = $max_ejare1; echo "حداکثر اجاره : $max_ejare ".'<hr>';}
			
		/*---- قیمت ----*/
		if($min_geymat != 0 ){ echo "حداقل قیمت : $min_geymat ".'<hr>'; }
		if($min_geymat1 != 0){ $min_geymat = $min_geymat1; echo "حداقل قیمت : $min_geymat ".'<hr>';}
		if($max_geymat != 0 ){ echo "حداکثر قیمت : $max_geymat ".'<hr>'; }
		if($max_geymat1 != 0){ $max_geymat = $max_geymat1; echo "حداکثر قیمت : $max_geymat ".'<hr>';}			

}

function priceS($code)
{
	$CI =& get_instance();
	
	$min_price = $CI->model_min_price->get_by(array('code'=>$code));
	foreach($min_price as $row){
		$min_rahn = $row->min_rahn .'  هزار تومان';
		$min_ejare = $row->min_ejare .'  هزار تومان';
		$min_geymat = $row->min_geymat .'  هزار تومان';
		$max_rahn = $row->max_rahn .'  هزار تومان';
		$max_ejare = $row->max_ejare .'  هزار تومان';
		$max_geymat = $row->max_geymat .'  میلیارد';
		}
		
	$max_price = $CI->model_max_price->get_by(array('code'=>$code));
	foreach ($max_price as $row ){
		$min_rahn1 = $row->min_rahn .'   میلیون تومان ';
		$min_ejare1 = $row->min_ejare .'   میلیون تومان';
		$min_geymat1 = $row->min_geymat  .'   میلیون تومان ';
		$max_rahn1 = $row->max_rahn .'   میلیون تومان';
		$max_ejare1 = $row->max_ejare .'   میلیون تومان';
		$max_geymat1 = $row->max_geymat .'   میلیون تومان';
		}
		
		/*---- رهن ----*/
		if($min_rahn != 0 ){ echo "رهن : $min_rahn ".'<hr>'; }
		if($min_rahn1 != 0){ $min_rahn = $min_rahn1; echo " رهن : $min_rahn ".'<hr>';}
		if($max_rahn != 0 ){ echo "رهن : $max_rahn ".'<hr>'; }
		if($max_rahn1 != 0){ $max_rahn = $max_rahn1; echo " رهن : $max_rahn ".'<hr>';}
		
		/*---- اجاره ----*/		
		if($min_ejare != 0 ){ echo "اجاره : $min_ejare ".'<hr>'; }
		if($min_ejare1 != 0){ $min_ejare = $min_ejare1; echo "اجاره : $min_ejare ".'<hr>';}			
		if($max_ejare != 0 ){ echo "اجاره : $max_ejare ".'<hr>'; }
		if($max_ejare1 != 0){ $max_ejare = $max_ejare1; echo "اجاره : $max_ejare ".'<hr>';}
			
		/*---- قیمت ----*/
		if($min_geymat != 0 ){ echo "قیمت هر متر مربع  : $min_geymat ".'<hr>'; }
		if($min_geymat1 != 0){ $min_geymat = $min_geymat1; echo "قیمت هر متر مربع  : $min_geymat ".'<hr>';}
		if($max_geymat != 0 ){ echo "قیمت کل : $max_geymat ".'<hr>'; }
		if($max_geymat1 != 0){ $max_geymat = $max_geymat1; echo "قیمت کل : $max_geymat ".'<hr>';}			

}

function vam($code){
	        $CI =& get_instance();
	        $data['agsat'] ='0';
			$data['vam'] = '0';
			$data['tab']= '0';
			$data['tap']= '0';
			$result_vam = $CI->model_home_vam->get_by(array('code'=>$code));
			foreach($result_vam as $row){
				$max_vam = $row->max_vam;
				$min_vam = $row->min_vam;
				$max_price_vam = $row->max_price_vam;
				$min_price_vam = $row->min_price_vam;
				$tap = $row->tap;
				$tab = $row->tab;
				}
			//echo 'کل وام : '.$vam .'<hr>'.'اقساط وام : '.$agsat .'<hr>'.'تعداد اقساط پرداختی : '.$tap .'<hr>'.'تعداد اقساط باقی  مانده : '.$tab;
			if($max_vam != 0){
				echo 'کل وام : '.$max_vam .' میلیون تومان'.'<hr>';
				}
			if($min_vam != 0){
				echo 'کل وام : '. $min_vam .'هزار تومان ' .'<hr>';
				}	
			
			if($max_price_vam != 0){
				echo ' اقساط وام: '. $max_price_vam .' میلیون تومان ' .'<hr>';
				}
			if($min_price_vam != 0){
				echo ' اقساط وام: '. $min_price_vam .' هزار تومان ' .'<hr>';
				}
				
			if($tap != 0){
				echo 'تعداد اقساط پرداختی : '. $tap .'<hr>' ;
				}
			if($tab != 0){
				echo 'تعداد اقساط باقی مانده : '. $tab .'<hr>';
				}			

}



function vazeyat_darkhast_khane($code){
		$rahn = NULL;
		$ejare = NULL;
		$kharid = NULL;
		$pishforosh = NULL;
		$moaveze = NULL;
		
		$CI =& get_instance();
		$data = $CI->model_home_status->get_by(array('code'=>$code));
		foreach($data as $row){
			$status = $row->status_id;
			if($status == 1){ $rahn = 'checked="checked"'; }
			if($status == 2){ $ejare = 'checked="checked"'; }
			if($status == 3){ $kharid = 'checked="checked"'; }
			if($status == 4){ $pishforosh = 'checked="checked"'; }
			if($status == 5){ $moaveze = 'checked="checked"'; }

			}
			echo "<td><input type='checkbox' name='status[]' class='rahn' value='1' ".$rahn." /> رهن</td>";  
			echo "<td><input type='checkbox' name='status[]' class='ejare' value='2' ".$ejare."/> اجاره</td>";
			echo "<td><input type='checkbox' name='status[]' class='kharid' value='3'  ".$kharid."/> خرید</td>";
			echo "<td><input type='checkbox' name='status[]' class='pishfrosh' value='4' ".$pishforosh."/> پیش فروش</td>";
			echo "<td><input type='checkbox' name='status[]' class='moaveze' value='5' ".$moaveze."/> معاوضه</td>";
	
	}

function vazeyat_khane($code){
		$rahn = NULL;
		$ejare = NULL;
		$frosh = NULL;
		$pishforosh = NULL;
		$moaveze = NULL;
		
		$CI =& get_instance();
		$data = $CI->model_home_status->get_by(array('code'=>$code));
		foreach($data as $row){
			$status = $row->status_id;
			if($status == 1){ $rahn = 'checked="checked"'; }
			if($status == 2){ $ejare = 'checked="checked"'; }
			if($status == 6){ $frosh = 'checked="checked"'; }
			if($status == 4){ $pishforosh = 'checked="checked"'; }
			if($status == 5){ $moaveze = 'checked="checked"'; }

			}
			echo "<input type='checkbox' name='status[]' onchange='changeV(this);' class='rahn' value='1' ".$rahn." /> رهن";  
			echo "<input type='checkbox' name='status[]' onchange='changeV(this);' class='ejare' value='2' ".$ejare."/> اجاره";
			echo "<input type='checkbox' name='status[]' onchange='changeV(this);' class='frosh' value='6'  ".$frosh."/> فروش";
			echo "<input type='checkbox' name='status[]' onchange='changeV(this);' class='pishfrosh' value='4' ".$pishforosh."/> پیش فروش";
			echo "<input type='checkbox' name='status[]' onchange='changeV(this);' class='moaveze' value='5' ".$moaveze."/> معاوضه";
	
	}	