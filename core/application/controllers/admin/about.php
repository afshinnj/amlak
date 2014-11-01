<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }
	public function index(){
		$data = $this->model_about->get(); 
			foreach($data as $row){
				$data['title']       =$row->title;
				$data['keywords']    =$row->keywords ;
				$data['description'] =$row->description;
				}
		$this->nikcms->out('about','about',$data);	
		}	
		
	public function saveAbout(){
			$title       = $this->input->post('title',TRUE);
			$keywords    = $this->input->post('keywords',TRUE);
			$description = $this->input->post('description');
			$data = array('title'=>$title,
						  'keywords'=>$keywords,
						  'description'=>$description);
		 $this->model_about->save($data, 1);
		 redirect('admin/about/index');
			
			
		}
}/* end { */

/* End of file about.php */
/* Location: ./blog/controllers/about.php */