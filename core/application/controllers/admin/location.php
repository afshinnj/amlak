<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class location extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();

    }
	
	public function index(){
		
		$data['ostan'] = $this->model_ostan->get_by(array('ostan'=>'1'));
		$data['shahrestan'] = $this->model_shahrestan->get_by(array('shahrestan'=>'1'));
		$data['mantage'] = $this->model_mantage->get_by(array('mantage'=>'1'));
		
		
		
		$this->nikcms->out('location','location',$data); 
		
	}
	
	public function ostan(){
		if($this->model_ostan->validation() == TRUE){
			$data = array ('name'=>$this->input->post('ostan',TRUE),'ostan'=>'1');
			$this->model_autopopulate->save($data);
			redirect('admin/location');	
		}else{
			$data['ostan'] = $this->model_ostan->get_by(array('ostan'=>'1'));
			$data['shahrestan'] = $this->model_shahrestan->get_by(array('shahrestan'=>'1'));
			$data['mantage'] = $this->model_mantage->get_by(array('mantage'=>'1'));
			$this->nikcms->out('location','location',$data); 			
			}
		

	}
	
	public function shahrestan(){
		if($this->model_shahrestan->validation() == TRUE){
			$data = array('name'=>$this->input->post('shahrestan',TRUE),
						'parent_id'=>$this->input->post('ostan',TRUE),
						'shahrestan'=>'1');	
		    //$this->model_shahrestan->save($data);
			$this->model_autopopulate->save($data);
			redirect('admin/location');
		}else{
			$data['ostan'] = $this->model_ostan->get_by(array('ostan'=>'1'));
			$data['shahrestan'] = $this->model_shahrestan->get_by(array('shahrestan'=>'1'));
			$data['mantage'] = $this->model_mantage->get_by(array('mantage'=>'1'));

			$this->nikcms->out('location','location',$data); 			
			}
	}
	
	public function mantage(){
		if($this->model_mantage->validation() == TRUE){
		$data = array('name'=>$this->input->post('mantage',TRUE),
					'parent_id'=>$this->input->post('shahrestan',TRUE),
					'mantage'=>'1');	
		
		$this->model_autopopulate->save($data);
		redirect('admin/location/index');
		}else{
			$data['ostan'] = $this->model_ostan->get_by(array('ostan'=>'1'));
			$data['shahrestan'] = $this->model_shahrestan->get_by(array('shahrestan'=>'1'));
			$data['mantage'] = $this->model_mantage->get_by(array('mantage'=>'1'));

			$this->nikcms->out('location','location',$data); 
			}
	}
	
	/*
	*
	*
	*
	*کد های مربوط به حذف استان،شهرستان،منطقه
	*/
	
	public function delete_ostan(){
		$this->model_shahrestan->delete($this->uri->segment(4));
		$this->model_shahrestan->delete_by('parent_id',$this->uri->segment(4));
		redirect('admin/location/index'); 		
	}
	public function delete_shahrestan(){
		$this->model_shahrestan->delete($this->uri->segment(4));
		$this->model_shahrestan->delete_by('parent_id',$this->uri->segment(4));
		redirect('admin/location/index'); 		
	}
	public function delete_mantage(){
		
		$this->model_mantage->delete($this->uri->segment(4));
		redirect('admin/location/index'); 		
	}
	
	/*کد های ویرایش استان،شهرستان،منطقه*/
	
	public function edit_ostan(){
		$id = $this->uri->segment(4);
		$ostan = $this->model_ostan->get_by(array('id' => $id));
		foreach($ostan as $row){
			$data['name'] = $row->name;
			$data['id'] = $row->id;
			}
		$name = $this->input->post('ostan',TRUE);
		$id  = $this->input->post('id',TRUE);
		if($name != ''){
			$save = array('name'=>$name);
			$this->model_ostan->save($save,$id);
			redirect('location');
			}
				
		$this->nikcms->out('location','edit_ostan',$data); 
	}
	
    public function edit_shahrestan(){
		
		$shahrestan = $this->model_shahrestan->get_by(array('id'=>$this->uri->segment(4)));
		foreach($shahrestan as $row){
			$data['ostan'] = $row->parent_id;
			$data['name'] = $row->name;
			$data['id'] = $row->id;
			}
		$data['allOstan'] = $this->model_ostan->get_by(array('ostan'=>'1'));
		
		$name = $this->input->post('shahrestan',TRUE);
		$ostan = $this->input->post('ostan');
		$id = $this->input->post('id');
		if($name != ''){
			$this->model_shahrestan->save(array('name'=>$name,'parent_id'=>$ostan),$id);
			redirect('admin/location');
			}	
		$this->nikcms->out('location','edit_shahrestan',$data); 
	}
	
	public function edit_mantage(){
		
		$mantage = $this->model_mantage->get($this->uri->segment(4));
		foreach($mantage as $row){
			$data['shahrestan'] = $row->parent_id;
			$data['name'] = $row->name;
			$data['id'] = $row->id;
			}
			
		$data['allShahrestan'] = $this->model_shahrestan->get_by(array('shahrestan'=>'1'));
		
		$name = $this->input->post('mantage',TRUE);
		$shahrestan = $this->input->post('shahrestan');
		$id = $this->input->post('id');
		if($name != ''){
			$this->model_mantage->save(array('name'=>$name,'parent_id'=>$shahrestan),$id);
			redirect('admin/location');
			}	
		$this->nikcms->out('location','edit_mantage',$data); 
	}			

}/* end { */

/* End of file location.php */
/* Location: ./application/controllers/location.php */