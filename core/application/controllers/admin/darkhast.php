<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class darkhast extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
		$this->output->clear_all_cache();
		$data['data'] = $this->model_darkhast->get(NULL,'DESC');
	    $this->nikcms->out('darkhast','darkhast',$data);	
	}
	public function delete(){
			$this->output->clear_all_cache();
			$id_home = $this->uri->segment(4);
			$this->model_darkhast->delete($id_home);
			redirect('darkhast');
		}
		
	public function active(){
			$this->output->clear_all_cache();
			$id_home = $this->uri->segment(4);
			$data = array('active'=>1);
			$this->model_darkhast->save($data,$id_home);
			redirect('darkhast');
		}
	public function dactive(){
			$this->output->clear_all_cache();
			$id_home = $this->uri->segment(4);
			$data = array('active'=>0);
			$this->model_darkhast->save($data,$id_home);
			redirect('darkhast');
		}			
}/* end { */

/* End of file darkhast.php */
/* Location: ./blog/controllers/darkhast.php */