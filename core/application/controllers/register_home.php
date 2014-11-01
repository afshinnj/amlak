<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class register_home extends Frontend_Controller{
	
	public function __construct(){
        parent::__construct();
		
    }
	
	public function index(){
		$data['type'] = $this->model_type_home->get();
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}
			
		$data['idUser'] = $this->nikcms->Pass_hash($this->session->userdata('id'));
		
		$query = $this->model_populate->get(null, 'blank');
		$data['tests'] = $this->formatArrayToIdName($query->result_array());
		
		$data['type'] = $this->model_type_home->get();
		$data['nama'] = $this->model_nama->get();
		$data['kafpoosh'] = $this->model_kafpoosh->get();
		$data['sanad'] = $this->model_sanad->get();
		$data['karbary'] = $this->model_karbary->get();
		
		$this->load->view('site/header',$data);	
		$this->load->view('site/register_home');
		$this->load->view('site/footer');
		}
		
	function json() {
		$id = $this->uri->segment(4);
		$id = explode('-', $id);
		
		$query = $this->model_populate->get(null, $id);
		$data['content'] = $this->formatArrayToIdName($query->result_array());
		$this->load->view('site/json', $data);
	}
	
	private function formatArrayToIdName($data) {
		$result = array();
		foreach ($data as $row) {
			$result[$row['id']] = $row['name'];
		}
		return $result;
	}
		
	public function save(){
		
		$codeMelk = $this->session->userdata('id') . mt_rand(100,999);
			
		$this->model_home->insert_emkanat($codeMelk);
		
		if (!empty($_FILES['userfile']['name'])) { $this->model_home->upload('userfile',$codeMelk); }
		if (!empty($_FILES['userfile1']['name'])) { $this->model_home->upload('userfile1',$codeMelk); }			
	    if (!empty($_FILES['userfile2']['name'])) { $this->model_home->upload('userfile2',$codeMelk); }		

		$this->model_home->status($codeMelk);
		
		$max = array('code'=>$codeMelk,'status'=>'2');
		$this->model_max_price->save($max);
		
		$min = array('code'=>$codeMelk,'status'=>'2');
		$this->model_min_price->save($min);
		
		$this->model_home->price($codeMelk);
		
		$this->model_home_vam->save_vam($codeMelk);
		
		$date = $this->nikdate->date("l j F Y");//تاریخ ثبت
		$this->model_home->save_home($codeMelk,$date); 
		
	    $ads = $this->input->post('ads');
			if($ads == 1){
				redirect('profile');
				}
			elseif($ads == 2){
				redirect('advertisement/'.$codeMelk);
				}
		
		}
		
		public function delete(){
			$id_home = $this->uri->segment(3);
			$idUser = $this->session->userdata('id');
			$home = $this->model_home->get_by(array('id_user'=>$idUser));
			foreach($home as $row){
				if($row->id == $id_home){
					
					
					$image = $this->model_home_image->get_by(array('id_home'=>$row->code_melk));
					foreach($image as $rows){
						@unlink("./images/home/$rows->name");
						}
						$this->db->where('id_home',$row->code_melk);
						$this->db->delete('homeimage');
					
					
					$this->model_home_vam->delete_by(array('code'=>$row->code_melk));
					$this->model_max_price->delete_by(array('code'=>$row->code_melk));
					$this->model_min_price->delete_by(array('code'=>$row->code_melk));
					$this->model_home_status->delete_by(array('code'=>$row->code_melk));
					$this->db->where('id_khane',$row->code_melk);
			        $this->db->delete('emkanat_khane');
					
					$this->model_home->delete($id_home);
					$this->model_advertisement->delete_by(array('code_melk'=>$row->code_melk));
					
					$this->output->clear_all_cache();
					}
				}
				
			
			
			redirect('profile');
			}
		
		public function edit(){
			$data['type'] = $this->model_type_home->get();
			$web = $this->model_web_config->get();
			foreach($web as $row){
				$data['WebTitle']       = $row->Web_Title;
				$data['Keywords']       = $row->Keywords;
				$data['Description']       = $row->Description;
					}
					
			$id_home = $this->uri->segment(3);
			$idUser = $this->session->userdata('id');
			$home = $this->model_home->get_by(array('id_user'=>$idUser));
			foreach($home as $row){
				if($row->id == $id_home){
					$get_result_home = $this->model_home->get_by(array('id'=>$id_home));
					}
				}
			
			foreach($get_result_home as $row){
				$data['idHome'] = $this->nikcms->Pass_hash($row->id);
				$data['id_ostan'] = $row->id_ostan;
				$data['id_shahrestan'] = $row->id_shahrestan;
				$data['id_mantage'] = $row->id_mantage;
				$data['address'] = $row->address;
				$data['id_noeMelk'] = $row->noe_melk;

				$data['mogheyat'] = $row->mogheyat;

				$data['masahat'] = $row->masahat;
				$data['zirbana'] = $row->zirbana;
				$data['tool_bar'] = $row->tool_bar;
				$data['eslahi'] = $row->eslahi;
				$data['t_metraj'] = $row->t_metraj;
				
				$data['tarakom'] = $row->tarakom;
				
				$data['karbari'] = $row->karbari;
				
				$data['mabar'] = $row->mabar;
				
				$data['id_sanad'] = $row->sanad;
				
				$data['mojavez'] = $row->mojavez;
				$data['id_nama'] = $row->nama;
				
				$data['sokoonat'] = $row->sokoonat;
				
				$data['emtiyaz'] = $row->emtiyaz;
				
				$data['tabagheh'] = $row->tabagheh;
				
				$data['sen_bana'] = $row->sen_bana;
				$data['vahedha'] = $row->vahedha;
				$data['tabaghat'] = $row->tabaghat;
				$data['khab'] = $row->khab;
				$data['teras'] = $row->teras;
				$data['id_kafpoosh'] = $row->kafpoosh;
				$data['telefon'] = $row->telefon;
				
				$data['etebar'] = $row->etbar;
				
				$data['service_ashpazkhaneh'] = $row->service_ashpazkhaneh;
				$data['service_behdashti'] = $row->service_behdashti;
				
				//$data['tozihat'] = $row->tozihat;
				$code_melk = $row->code_melk;
				$data['code'] = $row->code_melk;
 				}
				
				$emtiyaz = explode(',',$data['emtiyaz']);
				$data['emtiyaz1'] ="";
				$data['emtiyaz2'] ="";
				$data['emtiyaz3'] ="";
				$data['emtiyaz4'] ="";
				foreach($emtiyaz as $row){
					if ($row == 'آب'){
						$data['emtiyaz1']= 1;
					}
						
					if ($row == 'برق'){
						$data['emtiyaz2']= 2;
					}
						
					if ($row == 'گاز'){
						$data['emtiyaz3']= 3;
					}
					
					if ($row == 'تلفن'){
						$data['emtiyaz4']= 4;
					}
					}
			$data['em']='';
			$data['em1']='';
			$data['em2']='';
			$data['em3']='';
			$data['em4']='';
			$data['em5']='';
			$data['em6']='';
			$data['em7']='';
			$data['em8']='';
			$data['em9']='';
			$data['em10']='';
			$data['em11']='';
			$data['em12']='';
			$data['em13']='';
			$data['em14']='';
			$data['em15']='';
			$data['em16']='';
			$data['em17']='';
			$data['em18']='';
			$data['em19']='';
			$data['em20']='';
			$data['em21']='';
			$data['em22']='';
			$data['em23']='';
			$data['em24']='';
			$data['em25']='';
			$data['em26']='';
			$data['em27']='';		
			$this->db->where('id_khane',$code_melk);		
			$result = $this->db->get('emkanat_khane')->result();
			foreach($result as $row){
				if($row->emkanat == 'آشپزخانه اپن'){ $data['em'] = 'checked="checked"'; }		
				if($row->emkanat == 'پارکینگ'){ $data['em1'] = 'checked="checked"'; }		
				if($row->emkanat == 'انباری'){ $data['em2'] = 'checked="checked"'; }
				if($row->emkanat == 'شومینه'){ $data['em3'] = 'checked="checked"'; }
				if($row->emkanat == 'کولر'){ $data['em4'] = 'checked="checked"'; }
				if($row->emkanat == 'حیاط'){ $data['em5'] = 'checked="checked"'; }
				if($row->emkanat == 'شوفاژ'){ $data['em6'] = 'checked="checked"'; }
				if($row->emkanat == 'چیلر'){ $data['em7'] = 'checked="checked"'; }
				if($row->emkanat == 'پکیج'){ $data['em8'] = 'checked="checked"'; }
				if($row->emkanat == 'جکوزی'){ $data['em19'] = 'checked="checked"'; }
				if($row->emkanat == 'فن کوئل'){ $data['em10'] = 'checked="checked"'; }
				if($row->emkanat == 'آبگرمکن'){ $data['em11'] = 'checked="checked"'; }
				if($row->emkanat == 'چوب کاری'){ $data['em12'] = 'checked="checked"'; }
				if($row->emkanat == 'نور مخفی'){ $data['em13'] = 'checked="checked"'; }
				if($row->emkanat == 'ریموت کنترل'){ $data['em14'] = 'checked="checked"'; }
				if($row->emkanat == 'جارو مرکزی'){ $data['em15'] = 'checked="checked"'; }
				if($row->emkanat == 'آنتن مرکزی'){ $data['em16'] = 'checked="checked"'; }
				if($row->emkanat == 'آیفون تصویری'){ $data['em17'] = 'checked="checked"'; }
				if($row->emkanat == 'سیستم ایمنی'){ $data['em18'] = 'checked="checked"'; }
				if($row->emkanat == 'شوتینگ زباله'){ $data['em19'] = 'checked="checked"'; }
				if($row->emkanat == 'آسانسور'){ $data['em20'] = 'checked="checked"'; }
				if($row->emkanat == 'سرایداری'){ $data['em21'] = 'checked="checked"'; }
				if($row->emkanat == 'لابی'){ $data['em22'] = 'checked="checked"'; }
				if($row->emkanat == 'استخر'){ $data['em23'] = 'checked="checked"'; }
				if($row->emkanat == 'سونا'){ $data['em24'] = 'checked="checked"'; }
				if($row->emkanat == 'باربیکیو'){ $data['em25'] = 'checked="checked"'; }
				if($row->emkanat == 'گچ بری'){ $data['em26'] = 'checked="checked"'; }
				if($row->emkanat == 'نقاشی'){ $data['em27'] = 'checked="checked"'; }			
		
				}
			
			$data['nama'] = $this->model_nama->get();
			$data['sanad'] = $this->model_sanad->get();
			$data['karbary'] = $this->model_karbary->get();
			$data['type'] = $this->model_type_home->get();
			$data['kafpoosh'] = $this->model_kafpoosh->get();
			
			$data['idUser'] = $this->nikcms->Pass_hash($idUser);	
			
			$data['ostan'] = $this->model_ostan->get_by(array('ostan'=>'1'));				
			$data['shahrestan'] = $this->model_shahrestan->get_by(array('parent_id'=>$data['id_ostan']));
			$data['mantage'] = $this->model_mantage->get_by(array('parent_id'=>$data['id_shahrestan']));	
			
			$max_price = $this->model_max_price->get_by(array('code'=>$code_melk));
				foreach($max_price as $row ){
					$min_rahn1 = $row->min_rahn;
					$max_rahn1 = $row->max_rahn;
					$min_ejare1 = $row->min_ejare;
					$max_ejare1 = $row->max_ejare;
					$min_geymat1 = $row->min_geymat;
					$max_geymat1 = $row->max_geymat;
					}
					
			$min_price = $this->model_min_price->get_by(array('code'=>$code_melk));
				foreach( $min_price as $row ){
					$min_rahn= $row->min_rahn;
					$max_rahn = $row->max_rahn;
					$min_ejare = $row->min_ejare;
					$max_ejare = $row->max_ejare;
					$min_geymat = $row->min_geymat;
					$max_geymat = $row->max_geymat;
					}
			
			/*------- رهن ------*/
		if($min_rahn1 != 0){
			$data['min_rahn'] = $min_rahn1;
			}else {
				$data['min_rahn'] = $min_rahn;
				}
			
		if($max_rahn1 != 0){
			$data['max_rahn'] = $max_rahn1;
			}else{
				$data['max_rahn'] = $max_rahn;

				}
				
		/*------- اجاره ------*/		
		if($min_ejare1 != 0){
			$data['min_ejare'] = $min_ejare1;
			}else {
				$data['min_ejare'] = $min_ejare;
				}
			
		if($max_ejare1 != 0){
			$data['max_ejare'] = $max_ejare1;
			}else{
				$data['max_ejare'] = $max_ejare;	
				}
				
		/*------- قیمت ------*/		
		if($min_geymat1 != 0){
			$data['min_geymat'] = $min_geymat1;
			}else {
				$data['min_geymat'] = $min_geymat;
				}
			
		if($max_geymat1 != 0){
			$data['max_geymat'] = $max_geymat1;
			}else{
				$data['max_geymat'] = $max_geymat;	
				}
			
			
		/*-- وام --*/
			$data['agsat'] ='0';
			$data['vam'] = '0';
			$data['tab']= '0';
			$data['tap']= '0';	
		    $result_vam = $this->model_home_vam->get_by(array('code'=>$code_melk));
			foreach($result_vam as $row){
				$max_vam = $row->max_vam;
				$min_vam = $row->min_vam;
				$max_price_vam = $row->max_price_vam;
				$min_price_vam = $row->min_price_vam;
				$tap = $row->tap;
				$tab = $row->tab;
				}
			if($max_vam != 0){
				$data['vam']= $max_vam;
				}
			if($min_vam != 0){
				$data['vam']= $min_vam;
				}	
			
			if($max_price_vam != 0){
				$data['agsat']= $max_price_vam ;
				}
			if($min_price_vam != 0){
				$data['agsat']= $min_price_vam ;
				}
				
			if($tap != 0){
				$data['tap']= $tap ;
				}
			if($tab != 0){
				$data['tab']= $tab ;
				}
			
			$data['status'] = $this->model_home_status->get_by(array('code'=>$code_melk));

			$count = $this->model_home_image->count_db_results(array('id_home'=>$code_melk));
			$data['count'] = 3 - $count;
			
			$data['images'] = $this->model_home_image->get_by(array('id_home'=>$code_melk));
			
			$data['ads'] = 'no';
			$ads = $this->model_advertisement->get_by(array('code_melk'=>$code_melk));
			if($ads){
				$data['ads'] = 'yes';
				}
			
			$this->load->view('site/header',$data);	
			$this->load->view('site/register_home_edit');
			$this->load->view('site/footer');
			}
			
	public function update(){
		
			$id_home = $this->input->post('idHome');
			
			$idUser = $this->session->userdata('id');
			$home = $this->model_home->get_by(array('id_user'=>$idUser));
			foreach($home as $row){
				$codeMelk = $row->code_melk;
				$saveId =$row->id;
				$id = $this->nikcms->Pass_hash($row->id);
				if($id == $id_home){
		
				if (!empty($_FILES['userfile1']['name'])) { $this->model_home->upload('userfile1',$codeMelk); }
				if (!empty($_FILES['userfile2']['name'])) { $this->model_home->upload('userfile2',$codeMelk); }			
				if (!empty($_FILES['userfile3']['name'])) { $this->model_home->upload('userfile3',$codeMelk); }	
			
				$this->model_home_vam->delete_by(array('code'=>$codeMelk));
				
				$this->model_home->status($codeMelk);
				
				$this->model_home->price($codeMelk);
				
				$this->model_home_vam->save_vam($codeMelk);
				$this->model_home->insert_emkanat($codeMelk);

				
										  
			    $data = array('id_user'=>$this->session->userdata('id'),
							'id_ostan'=>$this->input->post('ostan',TRUE),
								'id_shahrestan'=>$this->input->post('category',TRUE),
								'id_mantage'=>$this->input->post('content',TRUE),
								'address'=>$this->input->post('address',TRUE),
								'noe_melk' => $this->input->post('noeMelk',TRUE),
								
								'mogheyat'=> $this->input->post('mogheyat',TRUE),
													
								'masahat'=> $this->input->post('masahat',TRUE),// مساحت

								'zirbana'=> $this->input->post('zirbana',TRUE),// زیربنا
								
								'tool_bar'=> $this->input->post('tool_bar',TRUE),// طول بر
								
								'eslahi'=> $this->input->post('eslahi',TRUE),// اصلاحی
								
								't_metraj'=> $this->input->post('t_metraj',TRUE),//متراژ
								
								'tarakom'=> $this->input->post('tarakom',TRUE),// طول بر
								
								'karbari'=> $this->input->post('karbari',TRUE),// کاربری
								
								'mabar'=> $this->input->post('mabar',TRUE),// معبر
								
								'sanad'=> $this->input->post('sanad',TRUE),// سند
								
								'mojavez'=> $this->input->post('mojavez',TRUE),// مجوز
								
								'nama'=> $this->input->post('nama',TRUE),// نما
								
								'sokoonat'=> $this->input->post('sokoonat',TRUE),// سکونت
								
								'emtiyaz'=> $this->input->post('emtiyaz1',TRUE).','.
								$this->input->post('emtiyaz2',TRUE).','.
								$this->input->post('emtiyaz3',TRUE).','.
								$this->input->post('emtiyaz4',TRUE),// امتیاز
	
							
								'tabagheh' => $this->input->post('tabagheh',TRUE),//طبقه
								'sen_bana' => $this->input->post('sen_bana',TRUE),//سن بنا
								
								'vahedha' => $this->input->post('vahedha',TRUE),//تعداد واحد
								
								'tabaghat' => $this->input->post('tabaghat',TRUE),//تعداد طبقه
								
								'khab' => $this->input->post('khab',TRUE),//تعداد خواب
								
								'teras' => $this->input->post('teras',TRUE),//متراژ تراس
								
								'kafpoosh' => $this->input->post('kafpoosh',TRUE),//کفپوش
								
								'telefon' => $this->input->post('telefon',TRUE),//تلفن
								
								'service_ashpazkhaneh' =>  $this->input->post('service_ashpazkhaneh',TRUE),//سرویس آشپزخانه
								
								'service_behdashti' =>  $this->input->post('service_behdashti',TRUE),//سرویس بهداشتی
									
								//'tozihat' => $this->input->post('tozihat',TRUE), //توضیحات
								
								'etbar' =>$this->input->post('etebar',TRUE)
								);
							
			    $this->model_home->save($data,$saveId);
						
				$this->output->clear_all_cache();
				
					}//end if
				}// end foreach
			redirect('profile');
		}//end function update
	
	public function expire(){
		$id = $this->uri->segment(3);
		$data['type'] = $this->model_type_home->get();
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}
			
		$data['idUser'] = $this->nikcms->Pass_hash($this->session->userdata('id'));
		$data['post'] = $this->nikcms->Pass_hash($id);
		$data['homeId'] = $id;
		$result = $this->model_home->get_by(array('id'=>$id));
		foreach($result as $row){
			$data['etbar'] = $row->etbar;
			}
		$this->load->view('site/header',$data);	
		$this->load->view('site/expire_home');
		$this->load->view('site/footer');
		
		
		}
		
	public function expire_up(){
		$post = $this->input->post('post',TRUE);
		$id = $this->input->post('homeId',TRUE);
		
		if($post == $this->nikcms->Pass_hash($id)){
			$data =array('active'=>'1','etbar'=>$this->input->post('etebar',TRUE));
			$this->model_home->save($data, $id);
			}
			redirect('profile');
		}
	
	public function delete_image(){
		$id = $this->uri->segment(3);
		$result = $this->model_home_image->get_by(array('id'=>$id));
		foreach($result as $row){
		   $name = $row->name;
			}
		@unlink("./images/home/$name");
		
		$this->model_home_image->delete($id);
		 redirect($_SERVER['HTTP_REFERER']);
		}/* end function delete*/	
				
	
}
