<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class advertisement extends Frontend_Controller{
	
	public function __construct(){
        parent::__construct();
		$this->load->library('image_lib');
    }
	
	public function index(){
		$data['type'] = $this->model_type_home->get();
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}
		$code = $this->uri->segment(2);
		$id = $this->session->userdata('id');
		$result = $this->model_home->get_by(array('id_User'=>$id));
		foreach($result as $row){
			if ($row->code_melk == $code){
				$data['code'] = $this->nikcms->Pass_hash($code);
				}
			}
			
		$this->load->view('site/header',$data);
		$this->load->view('site/advertisement');
		$this->load->view('site/footer');
		}
		
	public function pardakht(){
		$data['cart'] = 'cart';
		$data['idAds'] ='';
		$data['type'] = $this->model_type_home->get();
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}

		$id = $this->session->userdata('id');
		$result = $this->model_site_user->get_by(array('id'=>$id));
		foreach($result as $row){
			$data['userName'] = $row->userName;
			}
			
		$code = $this->input->post('code',TRUE);
		$agahi = $this->input->post('agahi',TRUE);
		$data['code'] = $code;
		$data['agahi'] = $agahi;
		if($agahi == 1){
			$data['mablag'] = '100,000 ریال';
			$data['mablag1'] = '10000';
			$data['desc'] = 'آگهی ویژه یک ماه 100,000 ریال ';
			}
		elseif($agahi == 2){
			$data['mablag'] = '200,000 ریال';
			$data['mablag1'] = '20000';
			$data['desc'] = 'آگهی ویژه یک ماه 200,000 ریال ';
			}
			
		$this->load->view('site/header',$data);
		$this->load->view('site/pardakht');
		$this->load->view('site/footer');
		}	

	public function cart(){
		$user_id = $this->session->userdata('id');
		$code = $this->input->post('code',TRUE);
		$agahi = $this->input->post('agahi',TRUE);
		$TrackingNumber = $this->input->post('TrackingNumber',TRUE);
		$PayerName = $this->input->post('PayerName',TRUE);
		$Dateofpayment = $this->input->post('Dateofpayment',TRUE);
		$Theamountpaid = $this->input->post('Theamountpaid',TRUE);
		
		$result = $this->model_home->get_by(array('id_User'=>$user_id));
		foreach($result as $row){
				$code_melk = $row->code_melk;
			}// end foreach
			if ($code == $this->nikcms->Pass_hash($code_melk) ){
				
				/*ثبت کار بانک*/
				$data = array('code_melk'=>$code_melk,'id_user'=>$user_id,'TNumber'=>$TrackingNumber,'PayerName'=>$PayerName,
							  'Dateofpayment'=>$Dateofpayment,'Theamountpaid'=>$Theamountpaid,'save_date' => $this->nikdate->date("l j F Y"));
				 $this->model_cart->save($data);	
				 		  
				$homeData = array('etbar'=>$this->nikdate->date("Y",NULL,FALSE).
										   $this->nikdate->date("m",NULL,FALSE)+1 .
										   $this->nikdate->date("d",NULL,FALSE));
				$this->model_home->save_by($homeData,'code_melk',$code_melk);
					
					
				/*تبلیغات*/		  
				 $adv = array('code_melk'=>$code_melk,'id_user'=>$user_id,'ads_type'=>$agahi,			  
							  'save_date'=>$this->nikdate->date("Y",NULL,FALSE).
										   $this->nikdate->date("m",NULL,FALSE)+1 .
										   $this->nikdate->date("d",NULL,FALSE));							  
				$this->model_advertisement->save($adv);		  
			  }
			redirect('profile');
	
		}//end cart		
	
	public function delete(){
		$idUser = $this->session->userdata('id');
		$id = $this->uri->segment(3);
		$result = $this->model_advertisement->get_by(array('id'=>$id));
		foreach($result as $row){
			$code = $row->code_melk;
			$id_user = $row->id_user;
			}
			
			
			
		if($id_user == $idUser){
		$image = $this->model_home_image->get_by(array('id_home'=>$code));
		foreach($image as $rows){
			@unlink("./images/home/$rows->name");
			}
			$this->db->where('id_home',$code);
			$this->db->delete('homeimage');
		
		
		$this->model_home_vam->delete_by(array('code'=>$code));
		$this->model_max_price->delete_by(array('code'=>$code));
		$this->model_min_price->delete_by(array('code'=>$code));
		$this->model_home_status->delete_by(array('code'=>$code));
		$this->db->where('id_khane',$code);
		$this->db->delete('emkanat_khane');
		
		
		$this->output->clear_all_cache();
	
			
		$this->model_home->delete_by('code_melk',$code);
		$this->model_advertisement->delete($id);			
			}	
			
		redirect('profile');
		}
	
		
	public function adver(){
		$data['type'] = $this->model_type_home->get();
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}
		$this->load->view('site/header',$data);
		$this->load->view('site/adver');
		$this->load->view('site/footer');
		}//adver	
	
	
	
		
	public function save_adver(){
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
		
		$data['ads_type'] = $this->input->post('agahi');
		
		$this->load->view('site/header',$data);
		$this->load->view('site/save_adver');
		$this->load->view('site/footer');
		}
			
	public function registerHome(){

			$codeMelk = $this->session->userdata('id') . mt_rand(100,999);
			
			$this->model_home->insert_emkanat($codeMelk);
			
			$this->model_home->status($codeMelk);
			
			$max = array('code'=>$codeMelk,'status'=>'2');
			$this->model_max_price->save($max);
			
			$min = array('code'=>$codeMelk,'status'=>'2');
			$this->model_min_price->save($min);
			
			$this->model_home->price($codeMelk);
			
			$this->model_home_vam->save_vam($codeMelk);
			
			$date = $this->nikdate->date("l j F Y");//تاریخ ثبت
			$this->model_home->save_home($codeMelk,$date); 
			
			if (!empty($_FILES['userfile']['name'])) { $this->model_home->upload('userfile',$codeMelk); }
			if (!empty($_FILES['userfile1']['name'])) { $this->model_home->upload('userfile1',$codeMelk); }			
			if (!empty($_FILES['userfile2']['name'])) { $this->model_home->upload('userfile2',$codeMelk); }

			
			$ads_type = $this->input->post('ads_type');
			redirect('payment/'.$ads_type.'/'.$codeMelk);
		
		}
	
	public function payment(){
		$data['cart'] = 'cart';
		$data['idAds'] = '';
		$data['type'] = $this->model_type_home->get();
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}

		$id = $this->session->userdata('id');
		$result = $this->model_site_user->get_by(array('id'=>$id));
		foreach($result as $row){
			$data['userName'] = $row->userName;
			}
			
		$code = $this->uri->segment(3);
		$agahi = $this->uri->segment(2);
		$data['code'] = $this->nikcms->Pass_hash($code);
		$data['agahi'] = $agahi;
		
		if($agahi == 1){
			$data['mablag'] = '100,000 ریال';
			$data['mablag1'] = '10000';
			$data['desc'] = 'آگهی ویژه یک ماه 100,000 ریال ';
			}
		if($agahi == 2){
			$data['mablag'] = '200,000 ریال';
			$data['mablag1'] = '20000';
			$data['desc'] = 'آگهی ویژه یک ماه 200,000 ریال ';
			}
			
		$this->load->view('site/header',$data);
		$this->load->view('site/pardakht');
		$this->load->view('site/footer');		
		
		}
	
	public function mellat(){
		require_once(APPPATH.'libraries/nusoap/nusoap'.EXT); //includes nusoap
		$pric = $this->input->post('pric',TRUE);
	    $res = $this->mellat->request($pric,rand(100000,999999),'http://theafshinnotes.ir/site/callback');
		$this->mellat->go2bank($res);
		
		}
	
	
	public function tamdid(){
		$data['cart'] = 'cartUpdate';
		$data['type'] = $this->model_type_home->get();
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}
				
		$id = $this->uri->segment(3);
		$data['idAds'] = $id;
		$idUser = $this->session->userdata('id');
		$user = $this->model_site_user->get_by(array('id'=>$idUser));
		foreach($user as $row){
			$data['userName'] = $row->userName;
			}
		$result = $this->model_advertisement->get_by(array('id'=>$id));
		foreach($result as $row){
			if($row->id_user == $idUser){
				$type = $row->ads_type;
				$data['agahi'] = $type;
				$data['code'] = $this->nikcms->Pass_hash($row->code_melk);
					if($type == 1){
						$data['mablag'] = '100,000 ریال';
						$data['mablag1'] = '10000';
						$data['desc'] = 'آگهی ویژه یک ماه 100,000 ریال ';
						}
					if($type == 2){
						$data['mablag'] = '200,000 ریال';
						$data['mablag1'] = '20000';
						$data['desc'] = 'آگهی ویژه یک ماه 200,000 ریال ';
						}


				
			$this->load->view('site/header',$data);
			$this->load->view('site/pardakht');
			$this->load->view('site/footer');
				}/* end if */
			}/* end foreach $result*/
		
		}/*end function tamdid*/
	
	public function cartUpdate(){
		 $user_id = $this->session->userdata('id');
		 $code = $this->input->post('code',TRUE);
		 $agahi = $this->input->post('agahi',TRUE);
		 $TrackingNumber = $this->input->post('TrackingNumber',TRUE);
		 $PayerName = $this->input->post('PayerName',TRUE);
		 $Dateofpayment = $this->input->post('Dateofpayment',TRUE);
		 $Theamountpaid = $this->input->post('Theamountpaid',TRUE);
		 $idAds = $this->input->post('idAds',TRUE);
		 $result = $this->model_home->get_by(array('id_User'=>$user_id));
		foreach($result as $row){
				$code_melk = $row->code_melk;
			if ($code == $this->nikcms->Pass_hash($code_melk) ){
				
				/*ثبت کار بانک*/
				$data = array('code_melk'=>$code_melk,'id_user'=>$user_id,'TNumber'=>$TrackingNumber,'PayerName'=>$PayerName,
							  'Dateofpayment'=>$Dateofpayment,'Theamountpaid'=>$Theamountpaid,'save_date' => $this->nikdate->date("l j F Y"));
				 $this->model_cart->save($data);			  
				
					
					
				/*تبلیغات*/		  
				 $adv = array('code_melk'=>$code_melk,'id_user'=>$user_id,'ads_type'=>$agahi,			  
							  'save_date'=>$this->nikdate->date("Y",NULL,FALSE).
										   $this->nikdate->date("m",NULL,FALSE)+1 .
										   $this->nikdate->date("d",NULL,FALSE),'active'=>1);							  
				$this->model_advertisement->save($adv,$idAds);		  
				
			  }
			  }// end foreach
			redirect('profile');
	
		}//end cart		
	
	
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
	
}

