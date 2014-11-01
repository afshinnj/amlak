<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class details extends CI_Controller{
	
	public function __construct(){
        parent::__construct();
		
    }
	
	public function index(){
		$data['type'] = $this->model_type_home->get();
		$data['desc'] = ' ';
		$contact = $this->model_contact->get();
		foreach( $contact as $row ){
			$data['desc'] = $row->description;
			}
				
				
			
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}
				
		$id = $this->uri->segment(2);
		if($id == NULL){ redirect('index');}
		
		$get_home_result = $this->model_home->get_by(array('id'=>$id));
		
		if($get_home_result == FALSE){ redirect('index');}
		
		foreach($get_home_result as $row){
			$data['code'] = $row->code_melk;
			$data['date'] = $row->save_date;
			
			$bazdid = $row->bazdid;
			$noe_melk = $row->noe_melk;
			
			$data['masahat'] = $row->masahat;
			$karbari = $row->karbari;
			
			$data['emtiyaz'] = $row->emtiyaz;
			$data['telefon'] = $row->telefon;
			
			$zirbana = $row->zirbana;
			$nama = $row->nama;
			$kafpoosh = $row->kafpoosh;
			$mojavez = $row->mojavez;
			$mogheyat = $row->mogheyat;
			$tool_bar = $row->tool_bar;
			$eslahi = $row->eslahi;
			$tabagheh = $row->tabagheh;
			$sen_bana = $row->sen_bana;
			$vahedha = $row->vahedha;
			$tabaghat = $row->tabaghat;
			$khab = $row->khab;
			$teras = $row->teras;
			$service_ashpazkhaneh = $row->service_ashpazkhaneh;
			$service_behdashti = $row->service_behdashti;
			
			$data['tozihat'] = $row->tozihat;
			
			$data['sanad'] = $row->sanad;
			}
			$z = "زیر بنا :";
			$n = "نما :";
			$k = "کفپوش :";
			$mog = "موقعیت :";
			$t = "طول بر :";
			$e = "اصلاحیه :";
			$ta = "طبقه :";
			$sn = "سن بنا :";
			$tt = "تعداد طبقات :";
			$kh = "تعداد خواب :";
			$te = "تراس :";
			$sa = "کابینت :";
			$sb = "سرویس بهداشتی :";
			if($zirbana != NULL){$z ="زیر بنا :". $zirbana."متر";}
			if($nama != NULL){$n = "نما : $nama";}
			if($kafpoosh != NULL){$k = "کفپوش : $kafpoosh";}
			if($mogheyat != NULL){$mog = "موقعیت : $mogheyat";}
			if($tool_bar != NULL){$t = "طول بر :".$tool_bar."متر";}
			if($eslahi != NULL){$e = "اصلاحیه :". $eslahi ."متر";}
			if($tabagheh != NULL){$ta = "طبقه : $tabagheh";}
			if($sen_bana != NULL){$sn = "سن بنا : $sen_bana";}
			if($tabaghat != NULL){$tt = "تعداد طبقات : $tabaghat";}
			if($khab != NULL){$kh = "تعداد خواب : $khab";}
			if($teras != NULL){$te = "تراس :". $teras."متر";}
			if($service_ashpazkhaneh != NULL){$sa = "کابینت :". $service_ashpazkhaneh;}
			if($service_behdashti != NULL){$sb = "سرویس بهداشتی :". $service_behdashti;}
			$data['details'] = $z .' <hr>'.
							   $n .' <hr> '. 
							   $k .' <hr> '. 
							   $mog .' <hr> '. 
							   $t .' <hr> '. 
							   $e .' <hr> '. 
							   $ta .' <hr> '. 
							   $sn  .' <hr> '. 
							   $tt  .' <hr> '.
							   $kh  .' <hr> '. 
							   $te  .' <hr> '.
							   $sa  .' <hr> '.
							   $sb  .' <hr> ' 
							   ;
		/// code bazdid
			//$bazdid ++;
			$new_bazdid = array('bazdid'=>$bazdid + 1);
			$this->model_home->save($new_bazdid,$id);
			$data['bazdid'] = $bazdid ;
		///end code bazdid	
		
		///code noe melk
			$get_noe_melk = $this->model_type_home->get_by(array('id'=>$noe_melk));
			if($get_noe_melk)
			foreach($get_noe_melk as $row){
				$data['noe_melk'] = $row->title_noe_melk;
				
				}
			else{
				$data['noe_melk'] = '';
				}	
		///end code noe melk
		
		/// code address  melk
		$melk = $this->model_home->get_by(array('id'=>$id)); 
		foreach($melk as $row){
			$id_ostan = $row->id_ostan;
			$id_shahrestan = $row->id_shahrestan;
			$id_mantage = $row->id_mantage;
			$id = $row->id;
			$ostan = $this->model_ostan->get_by(array('id'=>$id_ostan));
			foreach($ostan as $row){
				 $ostanName = $row->name;
				}
					
			$shahrestan = $this->model_ostan->get_by(array('id'=>$id_shahrestan));
			foreach($shahrestan as $row){
				$shahrestanName = $row->name;
				}
				
			$mantage = $this->model_ostan->get_by(array('id'=>$id_mantage));
			foreach($mantage as $row){
				$mantageName = $row->name;
				}

			}
			
			$data['location'] = $ostanName .' - '. $shahrestanName .' - '. $mantageName;
		/// end code addres melk
		
		/// code karbari
			$result_karbari = $this->model_karbary->get_by(array('id'=>$karbari));
			if($result_karbari){
			foreach($result_karbari as $row){
				 $data['karbari'] = $row->title_karbary;
				}
			}else{
				$data['karbari'] = '';
				}
		/// code karbari
		
		///emkanat
		$this->db->where('id_khane',$data['code']);
		$data['khane'] = $this->db->get('emkanat_khane')->result();

		///end emkanat
		
		/// home image
		$this->db->where('id_home',$data['code']);
		$data['image'] = $this->db->get('homeimage')->result();
		/// end home image	
		

		
		$data['type'] = $this->model_type_home->get();
		$this->load->view('site/header',$data);	
		$this->load->view('site/details_home');
		$this->load->view('site/footer');
		}

}
