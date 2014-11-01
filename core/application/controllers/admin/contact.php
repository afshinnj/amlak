<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }
	public function index(){
		redirect('admin/contact/contactUs');		
		}
		
		//--- Contact Code ---\\
	public function contactUs(){
		$data = $this->model_contact->get();
		foreach( $data as $row ){
			$data['title']       = $row->title;
			$data['keywords']    = $row->keywords;
			$data['description'] = $row->description;
			}		
		$this->nikcms->out('contact','contact',$data);
		}
				
	public function contactSave(){
		$title       = $this->input->post('title',TRUE);
		$keywords    = $this->input->post('keywords',TRUE);
		$description = $this->input->post('description');
		$data = array('title'=>$title,
		 			  'keywords'=>$keywords,
					  'description'=>$description);
		$this->model_contact->save($data, 1);
		redirect('admin/contact/contactUs');
		
		}		
}/* end { */

/* End of file contact.php */
/* Location: ./blog/controllers/contact.php */