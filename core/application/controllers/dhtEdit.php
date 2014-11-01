<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dhtEdit extends Frontend_Controller{
	
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
		$data['id'] = $id;
		$homes = $this->model_darkhast->get($id);
		foreach($homes as $row){
			$data['hash_code'] = $this->nikcms->Pass_hash($row->code);
			$data['code'] = $row->code;
			$data['id_mantage'] = $row->id_mantage;
			$data['id_shahrestan'] = $row->id_shahrestan;
			$data['id_ostan'] = $row->id_ostan;
			$data['id_noeMelk'] = $row->id_noeMelk;
			$data['sen_bana'] = $row->sen_bana;
			$data['metraj'] = $row->metraj;
			$data['sharh_darkhast'] = $row->sharh_darkhast;
			$data['tedad_khab'] = $row->tedad_khab;
			$data['etebar'] = $row->etbar;
			}
			
		$data['ostan'] = $this->model_ostan->get_by(array('ostan'=>'1'));				
		$data['shahrestan'] = $this->model_shahrestan->get_by(array('parent_id'=>$data['id_ostan']));
		$data['mantage'] = $this->model_mantage->get_by(array('parent_id'=>$data['id_shahrestan']));
		
		$query = $this->model_populate->get(null, 'blank');
		
		$max_price = $this->model_max_price->get_by(array('code'=>$data['code']));
		foreach( $max_price as $row ){
			$min_rahn1 = $row->min_rahn;
			$max_rahn1 = $row->max_rahn;
			$min_ejare1 = $row->min_ejare;
			$max_ejare1 = $row->max_ejare;
			$min_geymat1 = $row->min_geymat;
			$max_geymat1 = $row->max_geymat;
			}
			
		$min_price = $this->model_min_price->get_by(array('code'=>$data['code']));
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
			$data['min_ejare'] = $min_ejare;
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
			$data['min_geymat'] = $min_geymat;
			}else {
				$data['min_geymat'] = $min_geymat;
				}
			
		if($max_geymat1 != 0){
			$data['max_geymat'] = $max_geymat1;
			}else{
				$data['max_geymat'] = $max_geymat;	
				}				
		$data['type'] = $this->model_type_home->get();
		$this->load->view('site/header',$data);	
		$this->load->view('site/darkhastEdit');
		$this->load->view('site/footer');
		}
		
	public function save(){
			$id = $this->input->post('id',TRUE);
			$home = $this->model_darkhast->get_by(array('id'=>$id));
			foreach($home as $row){
				$code = $row->code;
				}
			//$this->model_home_status->delete_by(array('code'=>$code));
		
		   
		  $id_hash = $this->nikcms->Pass_hash($code);
		  $hash_code = $this->input->post('code',TRUE);
		   
			$data = array('code'=>$code, 
							'id_ostan'=> $this->input->post('ostan',TRUE),
							'id_shahrestan' => $this->input->post('category',TRUE),
							'id_mantage' => $this->input->post('content',TRUE),
							'id_noeMelk' => $this->input->post('noeMelk',TRUE),
							'sen_bana' => $this->input->post('senBana',TRUE),
							'tedad_Khab' => $this->input->post('tedadKhab',TRUE),
							'metraj' => $this->input->post('metraj',TRUE),
							'etbar' => $this->input->post('etebar',TRUE),
							'sharh_darkhast' => $this->input->post('darkhast',TRUE));
							
							
				if($id_hash == $hash_code){			
					$this->model_darkhast->save($data,$id);
					
					//// رهن	
					$s_price_minRahn = $this->input->post('minRahn_s',TRUE);
					$min_rahn_price = $this->input->post('minRahn',TRUE);
					$s_price_maxRahn = $this->input->post('maxRahn_s',TRUE);
					$max_rahn_price = $this->input->post('maxRahn',TRUE);			
					$this->model_price->rahn($code,$s_price_minRahn,$min_rahn_price,$s_price_maxRahn,$max_rahn_price);	
					
					////اجاره
					$s_price_minEjare = $this->input->post('minEjare_s',TRUE);
					$min_ejare_price = $this->input->post('minEjare',TRUE);
					$s_price_maxEjare = $this->input->post('maxEjare_s',TRUE);
					$max_ejare_price = $this->input->post('maxEjare',TRUE);			
					$this->model_price->ejare($code,$s_price_minEjare,$min_ejare_price,$s_price_maxEjare,$max_ejare_price);
										
					////قیمت کل
					$s_price_minGeymat = $this->input->post('minGeymat_s',TRUE);
					$min_geymat_price = $this->input->post('minGeymat',TRUE);
					$s_price_maxGeymat = $this->input->post('maxGeymat_s',TRUE);
					$max_geymat_price = $this->input->post('maxGeymat',TRUE);			
					$this->model_price->geymat($code,$s_price_minGeymat,$min_geymat_price,$s_price_maxGeymat,$max_geymat_price);
					
					/* ذخیره وضیعت درخواست */
					$this->model_home->status($code);
	
					
				}
		 $this->output->clear_all_cache();
		 redirect('profile');
		 
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
}
