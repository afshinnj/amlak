<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ajax extends CI_Controller{
	
	public function __construct(){
        parent::__construct();
		
    }
	
	public function shahrestan(){
		
	    $id = $this->input->get('salavat');
	
		$result = $this->model_shahrestan->get_by(array('id_ostan'=>$id));
		
		foreach($result as $row){
			$data  = json_encode('<option>'.$row->sh_name.'</option>'); 
			echo $data;
			}
	
	}
	
}
