<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }
	
	public function index(){
		
		if($this->model_users->validation() == TRUE){
			$this->model_users->add_user();
		}	
		$data['data'] = $this->model_users->get();
		$this->nikcms->out('User','userPage',$data);
			
		}
	//=== delete User Code ===\\	
	public function delete(){
		$this->model_users->Delete($this->uri->segment(4));
		redirect('admin/users');
		}
		
	//=== Edit User Page ===\\	
	public function edit(){
		$data = $this->model_users->get_by(array('id'=>$this->uri->segment(4))); 
		if($data){ 
			foreach($data as $row){
			    $data['id']    = $row->id;	
			    $data['name']  = $row->LoginName;
				$data['email'] = $row->UserEmail;
				}
			$this->nikcms->out('User','UserEditPage',$data);
			} else{
				redirect('admin/users/addUser');
				}
		}
		//=== Update User Code ===\\
	public function updateUser(){
			$this->model_users->update();
			redirect('admin/users');
		}
}/* end { */

/* End of file users.php */
/* Location: ./blog/controllers/users.php */