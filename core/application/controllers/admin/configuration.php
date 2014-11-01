<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class configuration extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }
	
	public function index(){
					$data   = $this->model_web_config->get();
		foreach($data as $row){
			$data['title']          = $row->Web_Title;
			$data['Admin_Email']    = $row->Admin_Email;
			$data['Keywords']       = $row->Keywords;
			$data['Description']    = $row->Description;
			$data['WebOff']	     = $row->WebOff;
			$data['OffDescription'] = $row->OffDescription;
			}
		$this->nikcms->out('settings','webConfig',$data);	
		}
		//=== Web Config Update Code ===\\	
		
	public function SaveWebConfig(){
		$title       = $this->input->post('title',TRUE);
		$email       = $this->input->post('email',TRUE);
		$keyword     = $this->input->post('keywords',TRUE);
		$description = $this->input->post('description',TRUE);
		$data = array('Web_Title'   =>$title,
					  'Admin_Email' =>$email,
					  'Keywords'    =>$keyword,
					  'Description' =>$description);
		$this->model_web_config->save($data,1);
		redirect ('admin/configuration');
		}
				
	public function SiteOff(){
		$data   = $this->model_web_config->get();
		foreach($data as $row){
			$data['WebOff']	     = $row->WebOff;
			$data['OffDescription'] = $row->OffDescription;
			}
		if($data['WebOff']=='1'){
			$data['WebOn']="";
			$data['WebOff']="checked='checked'";
			}
		else{
			$data['WebOn']="checked='checked'";
			}
		$this->nikcms->out('settings','siteOff',$data);	
		}
		
	public function SaveSiteOFF(){
		$Off         = $this->input->post('siteOff',TRUE);
		$description = $this->input->post('description',TRUE);
		$Days		= $this->input->post('Days',TRUE);
		$Hours       = $this->input->post('Hours');
		$Minutes     = $this->input->post('Minutes');
		$Seconds     = $this->input->post('Seconds');
		$data = array(
					  'WebOff'         =>$Off,
					  'OffDescription' =>$description,
					  'Days' 			=>$Days,
					  'Hours'          =>$Hours,
					  'Minutes'        =>$Minutes,
					  'Seconds'        =>$Seconds
		              );
		    $this->model_web_config->save($data, 1);
			redirect('admin/configuration/SiteOff');
	
		}
}/* end { */

/* End of file configuration.php */
/* Location: ./application/controllers/configuration.php */