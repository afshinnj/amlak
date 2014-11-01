<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class profile extends Frontend_Controller{
	
	public function __construct(){
        parent::__construct();
		
    }
	
	public function index(){
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
		
				}
		$data['type'] = $this->model_type_home->get();		
		if($this->session->userdata('is_logged_in') == TRUE){
			$this->session->sess_destroy();
			}
			

		$id = $this->session->userdata('id');
		$result = $this->model_site_user->get_by(array('id'=>$id));
		foreach($result as $row){
			$data['userName'] = $row->userName;
			}

			$get_result_home = $this->model_home->get_by(array('id_User'=>$id));			
		    $data['get_home'] = $get_result_home;
			
			$get_result_ads = $this->model_advertisement->get_by(array('id_User'=>$id));
			$data['get_ads'] = $get_result_ads;
			
			$data['homes'] = $this->model_darkhast->get_by(array('id_user'=>$this->session->userdata('id')));
			
			
			
			
			$this->load->view('site/header',$data);	
		    $this->load->view('site/profile'); 	
			$this->load->view('site/footer');
		}
		

	public function change(){
		$data['type'] = $this->model_type_home->get();
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}
		$data['msg'] = '';
		$this->load->view('site/header',$data);
		$this->load->view('site/change');
		$this->load->view('site/footer');
		}
		
	public function pass_change(){
		$data['type'] = $this->model_type_home->get();
		$id = $this->session->userdata('id');
		$home = $this->model_site_user->get_by(array('id'=>$id));
		foreach($home as $row){
			$old_pass = $row->userPass;
			}
		$pass = $this->nikcms->Pass_hash($this->input->post('old_password',TRUE));
		
		if($pass == $old_pass){
			$new_pass = $this->input->post('new_password',TRUE);
			$r_pass = $this->input->post('r_password',TRUE);
			if($new_pass ==''){
				$data['msg'] = 'رمز عبور خود را دارد کنید';	
				$this->load->view('site/header',$data);
				$this->load->view('site/change');
				$this->load->view('site/footer');
				} else {
						if($new_pass == $r_pass){
							$data = array('userPass'=>$this->nikcms->Pass_hash($new_pass));
							$this->model_site_user->save($data,$id);
							redirect('profile');
						} else {
							$data['msg'] = 'تکرار اشتباه است';	
							$this->load->view('site/header',$data);
							$this->load->view('site/change');
							$this->load->view('site/footer');
					      }
					
					}

		}else{
			///echo $this->nikcms->Pass_hash('123456');
			  $data['msg'] =  'رمز عبور اشتباه است';
			  $this->load->view('site/header',$data);
			  $this->load->view('site/change');
			  $this->load->view('site/footer');
			  }
	}
		
	public function changeProfile(){
		$data['type'] = $this->model_type_home->get();
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}
				
		$id = $this->session->userdata('id');
		$userName = $this->input->post('userName',TRUE);
		$email = $this->input->post('email',TRUE);
		$homeTell = $this->input->post('homeTell',TRUE);
		$mobileTell = $this->input->post('mobileTell',TRUE);
		$address = $this->input->post('address',TRUE);
		$user = array('userName'=>$userName,
						'userEmail'=>$email,
							'homeTell'=>$homeTell,
								'mobileTell'=>$mobileTell,
									'userAdd' => $address);
			if($userName){
				$this->model_site_user->save($user,$id);
				redirect('profile');
				}
		$result = $this->model_site_user->get_by(array('id'=>$id));
		foreach($result as $row){
			$data['name'] = $row->userName;
			$data['email'] = $row->userEmail;
			$data['homeTell'] = $row->homeTell;
			$data['mobileTell'] = $row->mobileTell;
			$data['address'] = $row->userAdd;
			}
		
		$this->load->view('site/header',$data);									
		$this->load->view('site/changeProfile');
		$this->load->view('site/footer');
		}
				
	public function logout(){
		$this->session->sess_destroy();
		
		$this->output->clear_all_cache();
		redirect('index');
		}

		
}
