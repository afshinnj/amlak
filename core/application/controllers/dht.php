<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dht extends Frontend_Controller{
	
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
		$data['name'] = $this->session->userdata('UserName');
		$data['id'] = $this->nikcms->Pass_hash($this->session->userdata('id'));
		
		$query = $this->model_populate->get(null, 'blank');
		$data['tests'] = $this->formatArrayToIdName($query->result_array());
		$data['type'] = $this->model_type_home->get();

		$this->load->view('site/header',$data);	
		$this->load->view('site/darkhast');
		$this->load->view('site/footer');
		}
		
	public function darkhast_save(){
		
		$id = $this->input->post('id',TRUE);
		if($id == $this->nikcms->Pass_hash($this->session->userdata('id'))){
			$code = $this->session->userdata('id') . rand(1000,9999);//echo mt_rand(100000,999999); 
			$data = array('code' => $code,
							'id_user'=> $this->session->userdata('id'),
							'id_ostan'=> $this->input->post('ostan',TRUE),
							'id_shahrestan' => $this->input->post('category',TRUE),
							'id_mantage' => $this->input->post('content',TRUE),
							'id_noeMelk' => $this->input->post('noeMelk',TRUE),
							'sen_bana' => $this->input->post('senBana',TRUE),
							'tedad_Khab' => $this->input->post('tedadKhab',TRUE),
							'metraj' => $this->input->post('metraj',TRUE),
							'etbar' => $this->input->post('etebar',TRUE),
							'sharh_darkhast' => $this->input->post('darkhast',TRUE),
							'save_date' => $this->nikdate->date("l j F Y"),
							'active' => 0);
					
				$this->model_darkhast->save($data);
				
				$max = array('code'=>$code,'status'=>'1');
				$this->model_max_price->save($max);
				
				$min = array('code'=>$code,'status'=>'1');
				$this->model_min_price->save($min);

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
				$status = $this->input->post('status');
				foreach($status as $row){
					$data = array('code'=>$code,'status_id'=>$row);
					$this->model_home_status->save($data);
					}
				
			}
			
		redirect('profile');
		}
			
	public function delete(){
			$id_home = $this->uri->segment(3);
			$idUser = $this->session->userdata('id');
			$home = $this->model_darkhast->get_by(array('id_user'=>$idUser));
			foreach($home as $row){
				  $id = $row->id;
				  $code = $row->code;
				if($id == $id_home){
					$this->model_darkhast->delete($id_home);
					}
				}
			$this->model_home_status->delete_by('code',$code);
			$this->model_max_price->delete_by('code',$code);
			$this->model_min_price->delete_by('code',$code);
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
