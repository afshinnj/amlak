<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class detail extends CI_Controller{
	
	public function __construct(){
        parent::__construct();
		
    }
	
	public function index(){
	
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
		
		$result = $this->model_darkhast->get_by(array('id'=>$id));
		if($result == FALSE){ redirect('index');}
		foreach($result as $row){
			$code = $row->code;
			$id_user = $row->id_user;
			$id_ostan = $row->id_ostan;
			$id_shahrestan = $row->id_shahrestan;
			$id_mantage  = $row->id_mantage;
			$id_noeMelk = $row->id_noeMelk;
			$data['sen_bana'] = $row->sen_bana;
			$data['tedad_khab'] = $row->tedad_khab;
			$data['metraj'] = $row->metraj;
			$data['etbar'] = $row->etbar;
			$data['sharh_darkhast'] = $row->sharh_darkhast;
 			}
		
			
		$result = $this->model_site_user->get_by(array('id'=>$id_user));
		foreach($result as $row){
			$data['userName'] = $row->userName;
			$data['mobileTell'] = $row->mobileTell;
			}
			
			
		$ostan = $this->model_ostan->get_by(array('id'=>$id_ostan));
		foreach($ostan as $row){
			$data['ostan'] = $row->name;
			}	

		$shahrestan = $this->model_shahrestan->get_by(array('id'=>$id_shahrestan));
		foreach($shahrestan as $row){
			$data['shahrestan'] = $row->name;
			}	
			
		$mantage = $this->model_mantage->get_by(array('id'=>$id_mantage));
		foreach($mantage as $row){
			$data['mantage'] = $row->name;
			}
		
		$type = $this->model_type_home->get_by(array('id'=>$id_noeMelk));							
		foreach($type as $row){
			$data['noe_melk'] = $row->title_noe_melk;
			}
			
		$data['code'] = $code;


		
		$data['type'] = $this->model_type_home->get();		
		$this->load->view('site/header',$data);	
		$this->load->view('site/detail');
		$this->load->view('site/footer');
		}

}
