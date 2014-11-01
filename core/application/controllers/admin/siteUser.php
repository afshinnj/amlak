<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class siteUser extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
    }
	
	public function index(){
		$data['data'] = $this->model_site_user->get();
		$this->nikcms->out('siteUser','list',$data);
			
		}
	//=== delete User Code ===\\	
	public function delete(){
		$this->model_site_user->Delete($this->uri->segment(2));
		redirect('admin/siteUser');
		}
		
}/* end { */

/* End of file users.php */
/* Location: ./blog/controllers/users.php */