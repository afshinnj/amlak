<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class banner extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }
	public function index(){
		$data['banner'] = $this->model_banner->get();
		
		$this->nikcms->out('banner','banner',$data);	
		}	
		
	public function save(){
		$this->output->clear_all_cache();
		 $this->load->library('upload');			
	 if (!empty($_FILES['userfile']['name']))
			{
				// Specify configuration for File 1
				$config['upload_path'] = './images/banner';
				$config['allowed_types'] = 'gif|jpg|png';
				
				$config['max_size'] = '10000';
	  
				// Initialize config for File 1
				$this->upload->initialize($config);
	  
				// Upload file 1
				$this->upload->do_upload('userfile');
				$data = $this->upload->data();
				$banner = $data['file_name'];
			}
			
			$title       = $this->input->post('title',TRUE);
			$date    = $this->input->post('date',TRUE);
			$description = $this->input->post('description');
			
			$data = array('title'=>$title,
						  'date'=>$date,
						  'description'=>$description,
						  'image'=>$banner);
			$this->model_banner->save($data);
		    redirect('banner');
		}
		
	public function update(){
		$this->output->clear_all_cache();
		$this->load->library('upload');			
	 if (!empty($_FILES['userfile']['name']))
			{
				// Specify configuration for File 1
				$config['upload_path'] = './images/banner';
				$config['allowed_types'] = 'gif|jpg|png';
				
				$config['max_size'] = '10000';
	  
				// Initialize config for File 1
				$this->upload->initialize($config);
	  
				// Upload file 1
				$this->upload->do_upload('userfile');
				$data = $this->upload->data();
				$banner = $data['file_name'];
			}
			$id 		  = $this->input->post('id',TRUE);
			$title       = $this->input->post('title',TRUE);
			$date    = $this->input->post('date',TRUE);
			$description = $this->input->post('description');
			
			$data = array('title'=>$title,
						  'date'=>$date,
						  'description'=>$description,
						  'image'=>$banner);
			$this->model_banner->save($data,$id);
		    redirect('banner');
		}
		
	public function delete(){
		$this->output->clear_all_cache();
	    $id = $this->uri->segment(4);
		$this->model_banner->delete($id);
		 redirect('banner');
		}		
}/* end { */

/* End of file about.php */
/* Location: ./blog/controllers/about.php */