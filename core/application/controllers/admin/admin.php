<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }
	
	public function index()
	{
		   $data['home'] = $this->model_home->count_db();	
		   $data['home1'] = $this->model_darkhast->count_db();
		   $data['newsCount']   = $this->model_advertisement->count_db();
		   $data['user'] = $this->model_site_user->count_db();

			$this->nikcms->out('panel','panel',$data); 
				

	}
}/* end { */

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */