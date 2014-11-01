<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class advertisement extends Admin_Controller{
	
	public function __construct(){
        parent::__construct();
		
    }
	
	public function index(){
		$this->output->clear_all_cache();
		
		$get_result_ads = $this->model_advertisement->get();
		$data['get_ads'] = $get_result_ads;	
		
		$this->nikcms->out('advertisement','advertisement',$data);
		}
	
	
	public function delete(){
		$this->output->clear_all_cache();
		$id = $this->uri->segment(4);
		$this->model_advertisement->delete($id);
		redirect('ads');
		}
	
	public function active(){
		$this->output->clear_all_cache();
		$id = $this->uri->segment(4);
		$result = $this->model_advertisement->get_by(array('id'=>$id));
		foreach($result as $row){
			$code = $row->code_melk;
			}
		$data = array('active'=>'1');
		
		
		$homeResult = $this->model_home->get_by(array('code_melk'=>$code));
		foreach($homeResult as $rows){
			$idHome = $rows->id;
			}
		
		$this->model_home->save($data,$idHome);
		
		$this->model_advertisement->save($data,$id);
		redirect('ads');
		}	

	public function dactive(){
		$this->output->clear_all_cache();
		
		$id = $this->uri->segment(4);
		$result = $this->model_advertisement->get_by(array('id'=>$id));
		foreach($result as $row){
			$code = $row->code_melk;
			}
		$data = array('active'=>'0');
		
		
		$homeResult = $this->model_home->get_by(array('code_melk'=>$code));
		foreach($homeResult as $rows){
			$idHome = $rows->id;
			}
		
		$this->model_home->save($data,$idHome);
		
		$this->model_advertisement->save($data,$id);
		
		redirect('ads');
		}	
}

