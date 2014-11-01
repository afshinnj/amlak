<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class listHome extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
    }
	
	public function index(){
		$this->output->clear_all_cache();
		$data['data'] = $this->model_home->get(NULL,'DESC');
		
	    $this->nikcms->out('listHome','listHome',$data);	
	}
	public function delete(){
			$this->output->clear_all_cache();
			
			$id_home = $this->uri->segment(4);
			$home = $this->model_home->get_by(array('id'=>$id_home));
			foreach($home as $row){		
					$code_melk = $row->code_melk;
		    }	
					
					$image = $this->model_home_image->get_by(array('id_home'=>$code_melk));
					foreach($image as $rows){
						@unlink("./images/home/$rows->name");
						}
						$this->db->where('id_home',$row->code_melk);
						$this->db->delete('homeimage');
					
					
					$this->model_home_vam->delete_by(array('code'=>$code_melk));
					$this->model_max_price->delete_by(array('code'=>$code_melk));
					$this->model_min_price->delete_by(array('code'=>$code_melk));
					$this->model_home_status->delete_by(array('code'=>$code_melk));
					$this->db->where('id_khane',$row->code_melk);
			        $this->db->delete('emkanat_khane');
					
					$this->model_home->delete($id_home);
		
			redirect('admin/listHome');
			
	}
	
	public function check(){
		$this->output->clear_all_cache();
		$id_home = $this->uri->segment(4);
		$data = array('active'=>1);
		$this->model_home->save($data,$id_home);
		redirect('admin/listHome');
	}
		
	public function uncheck(){
		$this->output->clear_all_cache();
		$id_home = $this->uri->segment(4);
		$data = array('active'=>0);
		$this->model_home->save($data,$id_home);	
		redirect('admin/listHome');
	}			
}/* end { */

/* End of file darkhast.php */
/* Location: ./blog/controllers/darkhast.php */