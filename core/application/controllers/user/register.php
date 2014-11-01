<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class register extends CI_Controller{
	
	public function __construct()
	{
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
		if($this->model_site_user_register->validation() == TRUE){
			$result = $this->model_site_user_register->save_user();
			if($result == TRUE){

					redirect('success');	
							
				} else {
					$data['msg'] = 'کد امنیتی را درست وارد کنید';
					}
			
			}
		$data['captcha'] = $this->nikcms->captcha();
		$this->load->view('site/header',$data);
		$this->load->view('site/user');
		$this->load->view('site/footer');
		}
		
	public function success(){
		
			$data['type'] = $this->model_type_home->get();
			$web = $this->model_web_config->get();
			
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
				}
		
		$this->load->view('site/header',$data);
		$this->load->view('site/success');
		$this->load->view('site/footer');	
		}	
		
	
	function page_not_found()
	{
		show_404('page');
	}	
}
