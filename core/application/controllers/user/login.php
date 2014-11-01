<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller{
	
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
	$data['msg'] ='';	
	$this->load->view('site/header',$data);	
	$this->load->view('site/login');	
	$this->load->view('site/footer');	
		}

	public function check_user(){
		$data['type'] = $this->model_type_home->get();
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}
		$email = trim($this->input->post('email',TRUE));
		$pass  = trim($this->input->post('password',TRUE));	
		$result = $this->model_site_user->can_log_in($email,$pass);
			if($result == TRUE){
				
				$this->output->clear_all_cache();
				
				redirect('profile');
				//ورود با موفیت انجام شد
				}else{
					$data['msg'] = "نام کاربری یا رمز عبور اشتباه است .";
						$this->load->view('site/header',$data);	
						$this->load->view('site/login');	
						$this->load->view('site/footer');
					//ورود با شکست مواجه شد
					}
		}	
		

}
