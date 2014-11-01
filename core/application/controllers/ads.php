<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ads extends CI_Controller{
	
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
		$id = $this->uri->segment(2);		
		if($id == NULL){ redirect('index');}
		
		$result = $this->model_banner->get_by(array('id'=>$id));
		if($result == FALSE){ redirect('index');}
		$data['title'] = '';
		$data['description'] = '';
		foreach($result as $row){
			$data['title'] = $row->title;
			$data['description'] = $row->description;
			}
		$this->load->view('site/header',$data);
		$this->load->view('site/ads');
		$this->load->view('site/footer');
		}

			
	
}

