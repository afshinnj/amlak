<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fileManager extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }
	public function index(){
		 redirect('admin/fileManager/manager');		
		}
		
	//--- File Manager ---\\
	public function manager(){
		$data['file']    = $this->model_file_manager->get_file();
		$data['folders'] = $this->model_file_manager->get_folder();
		$data['folder']  = $this->uri->segment(4);
		if($data['folder']==''){
			$data['folder']= 'upload';
			}
		$this->nikcms->out('fileManager','fileManager',$data);
		}
		
			
	public function fileDel(){
		$data = $this->model_file_manager->DeleteFile();
		if($data){
			redirect('admin/fileManager/manager');
			}
		}
			
	public function do_upload()
	{
		$folder = $this->input->post('folder');
		$config['upload_path']   = "./images/".$folder;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	  = '50000';
		//$config['file_name']	 = md5(date('YmdHis'));
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			redirect('admin/fileManager/manager');
    	}
		else
		{
			//redirect('admin/fileManager/manager');
		}
	}		
}/* end { */

/* End of file FileManager.php */
/* Location: ./blog/controllers/FileManager.php */