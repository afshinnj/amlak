<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class site extends CI_Controller{
	
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
		$query = $this->model_populate->get(null, 'blank');
		$data['tests'] = $this->formatArrayToIdName($query->result_array());
		$data['type'] = $this->model_type_home->get();

		$this->output->cache(100);

		$this->model_expire->expire();
		
		$this->load->view('site/header',$data);
		$this->load->view('site/master');
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
	
	function page_not_found()
	{
		show_404('page');
	}
	
	public function contactus(){
		
		
		$data = $this->model_contact->get();
		foreach($data as $row){
			$data['WebTitle']= $row->title;
			$data['Keywords']= $row->keywords;
			$data['Description']= $row->title;
			$data['contact'] = $row->description;
			}
		$data['type'] = $this->model_type_home->get();	
		$data['captcha'] = $this->nikcms->captcha();
		$data['msg'] = NULL;
		$data['page']  = NULL;	
		$this->form_validation->set_rules('name','نام','trim|strip_tags|xss_clean|required');
		$this->form_validation->set_rules('email','ایمیل','trim|strip_tags|xss_clean|required|valid_email');
		$this->form_validation->set_rules('subject','موضوع','trim|strip_tags|xss_clean|required');
		$this->form_validation->set_rules('message','متن پیام','trim|strip_tags|xss_clean|required');
		
		if ($this->form_validation->run())
		{
			$send = $this->model_send_email->send_email();
			if($send == 'OK'){
				redirect('site/contactus');
				}else{
				    $data['msg'] = 'کد امنیتی اشتباه است';
						$this->load->view('site/header',$data);
						$this->load->view('site/contact');
						$this->load->view('site/footer');	
					}
		}
		else
		{
		$this->load->view('site/header',$data);
		$this->load->view('site/contact');
		$this->load->view('site/footer');	
		}

		}
		
	public function aboutus(){
		$data = $this->model_about->get();
		foreach($data as $row){
			$data['WebTitle']= $row->title;
			$data['Keywords']= $row->keywords;
			$data['Description']= $row->title;
			$data['about'] = $row->description;
			}
		$data['type'] = $this->model_type_home->get();	
		 $this->load->view('site/header',$data);
		$this->load->view('site/about');
		$this->load->view('site/footer');
		}
	
	public function home_list(){
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
			}
		$data['type'] = $this->model_type_home->get();	
		$id = $this->uri->segment(2);
		$where = 'noe_melk = '.$id.' AND active = 1';
		$data['result'] = $this->model_home->get_by($where,'DESC');
		$this->load->view('site/header',$data);
		$this->load->view('site/list_home');
		$this->load->view('site/footer');
		}	
	
	public function lists(){
		$web = $this->model_web_config->get();
		foreach($web as $row){
			$data['WebTitle']       = $row->Web_Title;
			$data['Keywords']       = $row->Keywords;
			$data['Description']       = $row->Description;
			}
		$data['type'] = $this->model_type_home->get();
		$data['list'] = $this->uri->segment(2);
		$page = $this->uri->segment(3);
		$data['page'] = $page;
		if($page){$data['page'] = $page;}
		
		$this->load->view('site/header',$data);
		$this->load->view('site/list_homes');
		$this->load->view('site/footer');
		}	
			
	
}

