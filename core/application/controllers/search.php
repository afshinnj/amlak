<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class search extends CI_Controller{
	
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
			 	
		$data['ostan'] = (int)$this->input->post('ostan',TRUE);
		$data['shahrestan'] = (int)$this->input->post('category',TRUE);
		$data['mantage'] = (int)$this->input->post('content',TRUE);
		$data['noe_melk'] = (int)$this->input->post('noeMelk',TRUE);
		$metraj = (int)$this->input->post('metraj',TRUE);
		
		if(!is_numeric($data['ostan'])){ redirect('index');}
		if(!is_numeric($data['shahrestan'])){ redirect('index');}
		if(!is_numeric($data['mantage'])){ redirect('index');}
		if(!is_numeric($data['noe_melk'])){ redirect('index');}
		if(!is_numeric($metraj)){ redirect('index');}
		
		
		
		if($metraj == 100){
			$data['metraj'] ="AND t_metraj <= 100";
			}
		if($metraj == 150){
			$data['metraj'] ="AND t_metraj >= 100 AND t_metraj <=150";
			}	
		if($metraj == 200){
			$data['metraj'] ="AND t_metraj >= 150 AND t_metraj <=200";
			}
		if($metraj == 250){
			$data['metraj'] ="AND t_metraj >= 200 AND t_metraj <=250";
			}
		if($metraj == 251){
			$data['metraj'] ="AND t_metraj >= 251";
			}
			
		 if($metraj == 0 ){
			 $data['metraj'] ="AND t_metraj >= 0";
			 }				

		  $status = $this->input->post('status');			 
		  if($status == 1){ $data['status'] = 1;}
	
		  if($status == 2){ $data['status'] = 2;}
			
		 
		$p = $this->input->post('money_max');
		$pp = strlen($p);
		if($pp == 9){
			$money_max = substr($p, -9,1);
			}
			else{
				$money_max ='';
				}
				
		if($pp == 10){
			$money_max = substr($p, -10,1);
			}
			else{
				$money_max ='';
				}	

		$p = $this->input->post('money_min');
		$pp = strlen($p);
		if($pp == 9){
			$money_min = substr($p, -9,1);
			}
			else{
				$money_min ='';
				}
				
		if($pp == 10){
			$money_min = substr($p, -10,1);
			}
			else{
				$money_min ='';
				}			
		
		$data['money_max'] = $money_max;
		$data['money_min'] = $money_min;	
	
		$this->load->view('site/header',$data);
		$this->load->view('site/search');
		$this->load->view('site/footer');
		}

			
	function page_not_found()
	{
		show_404('page');
	}	
}

