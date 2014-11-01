<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class detail extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
		$data['typeHome'] = $this->model_type_home->get();
		$data['karbary'] = $this->model_karbary->get();
		$data['sanad'] = $this->model_sanad->get();
		$data['nama'] = $this->model_nama->get();
		$data['kafpoosh'] = $this->model_kafpoosh->get();
		$data['kabinet'] = $this->model_kabinet->get();
		$this->nikcms->out('detail','detail',$data);		
	}
	
	public function type_home(){
		if($this->model_type_home->validation() == TRUE){
			$data = array ('title_noe_melk'=>$this->input->post('melk',TRUE));
			$this->model_type_home->save($data);
			redirect('admin/detail');	
		} else {
			
			$data['typeHome'] = $this->model_type_home->get();
			$data['karbary'] = $this->model_karbary->get();
			$data['sanad'] = $this->model_sanad->get();
			$data['nama'] = $this->model_nama->get();
			$data['kafpoosh'] = $this->model_kafpoosh->get();
			$data['kabinet'] = $this->model_kabinet->get();
		    $this->nikcms->out('detail','detail',$data);
			}
	}
	
	public function delete_type_home(){
		$this->model_type_home->delete($this->uri->segment(4));
		redirect('detail');
		}
		
	public function edit_type_home(){
		if($this->model_type_home->validation() == TRUE){
			$data = array ('title_noe_melk'=>$this->input->post('melk',TRUE));
			$this->model_type_home->save($data,$this->input->post('id'));
			redirect('admin/detail');	
		}
		
		$type = $this->model_type_home->get($this->uri->segment(4));
		if($type){
			foreach($type as $row){
				$data['id'] = $row->id;
				$data['type'] = $row->title_noe_melk;
			}
		    $this->nikcms->out('detail','edit_type_home',$data);	
		} else {
			redirect('admin/detail');
		}
		}
		
	
	public function karbary(){
		if($this->model_karbary->validation() == TRUE){
			$data = array ('title_karbary'=>$this->input->post('karbary',TRUE));
			$this->model_karbary->save($data);
			redirect('admin/detail');	
		} else {
			
			$data['typeHome'] = $this->model_type_home->get();
			$data['karbary'] = $this->model_karbary->get();
			$data['sanad'] = $this->model_sanad->get();
			$data['nama'] = $this->model_nama->get();
			$data['kafpoosh'] = $this->model_kafpoosh->get();
			$data['kabinet'] = $this->model_kabinet->get();
		    $this->nikcms->out('detail','detail',$data);
			}
		
		}
		
	public function delete_karbary(){
		$this->model_karbary->delete($this->uri->segment(4));
		redirect('admin/detail');
		}
		
	public function edit_karbary(){
		if($this->model_karbary->validation() == TRUE){
			$data = array ('title_karbary'=>$this->input->post('karbary',TRUE));
			$this->model_karbary->save($data,$this->input->post('id'));
			redirect('admin/detail');	
		}
		
		$type = $this->model_karbary->get($this->uri->segment(4));
		if($type){
			foreach($type as $row){
				$data['id'] = $row->id;
				$data['type'] = $row->title_karbary;
			}
		    $this->nikcms->out('detail','edit_karbary',$data);	
		} else {
			redirect('admin/detail');
		}
		}
		
		
	public function sanad(){
		if($this->model_sanad->validation() == TRUE){
			$data = array ('title_sanad'=>$this->input->post('sanad',TRUE));
			$this->model_sanad->save($data);
			redirect('admin/detail');	
		} else {
			
			$data['typeHome'] = $this->model_type_home->get();
			$data['karbary'] = $this->model_karbary->get();
			$data['sanad'] = $this->model_sanad->get();
			$data['nama'] = $this->model_nama->get();
			$data['kafpoosh'] = $this->model_kafpoosh->get();
			$data['kabinet'] = $this->model_kabinet->get();
		    $this->nikcms->out('detail','detail',$data);
			}
		
		}
		
	public function delete_sanad(){
		$this->model_sanad->delete($this->uri->segment(4));
		redirect('admin/detail');
		}
		
	public function edit_sanad(){
		if($this->model_sanad->validation() == TRUE){
			$data = array ('title_sanad'=>$this->input->post('sanad',TRUE));
			$this->model_sanad->save($data,$this->input->post('id'));
			redirect('admin/detail');	
		}
		
		$type = $this->model_sanad->get($this->uri->segment(4));
		if($type){
			foreach($type as $row){
				$data['id'] = $row->id;
				$data['type'] = $row->title_sanad;
			}
		    $this->nikcms->out('detail','edit_sanad',$data);	
		} else {
			redirect('admin/detail');
		}
		 
		}				
		
		
	public function nama(){
		if($this->model_nama->validation() == TRUE){
			$data = array ('title_nama'=>$this->input->post('nama',TRUE));
			$this->model_nama->save($data);
			redirect('admin/detail');	
		} else {
			
			$data['typeHome'] = $this->model_type_home->get();
			$data['karbary'] = $this->model_karbary->get();
			$data['sanad'] = $this->model_sanad->get();
			$data['nama'] = $this->model_nama->get();
			$data['kafpoosh'] = $this->model_kafpoosh->get();
			$data['kabinet'] = $this->model_kabinet->get();
		    $this->nikcms->out('detail','detail',$data);
			}
		
		}
		
	public function delete_nama(){
		$this->model_nama->delete($this->uri->segment(4));
		redirect('admin/detail');
		}
		
	public function edit_nama(){
		if($this->model_nama->validation() == TRUE){
			$data = array ('title_nama'=>$this->input->post('nama',TRUE));
			$this->model_nama->save($data,$this->input->post('id'));
			redirect('admin/detail');	
		}
		
		$type = $this->model_nama->get($this->uri->segment(4));
		if($type){
			foreach($type as $row){
				$data['id'] = $row->id;
				$data['type'] = $row->title_nama;
			}
		     $this->nikcms->out('detail','edit_nama',$data);	
		} else {
			redirect('admin/detail');
			}

		}
		
	public function kafpoosh(){
		if($this->model_kafpoosh->validation() == TRUE){
			$data = array ('title_kafpoosh'=>$this->input->post('kafpoosh',TRUE));
			$this->model_kafpoosh->save($data);
			redirect('admin/detail');	
		} else {
			
			$data['typeHome'] = $this->model_type_home->get();
			$data['karbary'] = $this->model_karbary->get();
			$data['sanad'] = $this->model_sanad->get();
			$data['nama'] = $this->model_nama->get();
			$data['kafpoosh'] = $this->model_kafpoosh->get();
			$data['kabinet'] = $this->model_kabinet->get();
		    $this->nikcms->out('detail','detail',$data);
			}
		
		}
		
	public function delete_kafpoosh(){
		$this->model_kafpoosh->delete($this->uri->segment(4));
		redirect('admin/detail');
		}
		
	public function edit_kafpoosh(){
		if($this->model_kafpoosh->validation() == TRUE){
			$data = array ('title_kafpoosh'=>$this->input->post('kafpoosh',TRUE));
			$this->model_kafpoosh->save($data,$this->input->post('id'));
			redirect('admin/detail');	
		}
		
		$type = $this->model_kafpoosh->get($this->uri->segment(4));
		if($type){
			foreach($type as $row){
				$data['id'] = $row->id;
				$data['type'] = $row->title_kafpoosh;
			}
		     $this->nikcms->out('detail','edit_kafpoosh',$data);	
		} else {
			redirect('admin/detail');
			}

		}
		
		
	public function kabinet(){
		if($this->model_kabinet->validation() == TRUE){
			$data = array ('title_kabinet'=>$this->input->post('kabinet',TRUE));
			$this->model_kabinet->save($data);
			redirect('admin/detail');	
		} else {
			
			$data['typeHome'] = $this->model_type_home->get();
			$data['karbary'] = $this->model_karbary->get();
			$data['sanad'] = $this->model_sanad->get();
			$data['nama'] = $this->model_nama->get();
			$data['kafpoosh'] = $this->model_kafpoosh->get();
			$data['kabinet'] = $this->model_kabinet->get();
		    $this->nikcms->out('detail','detail',$data);
			}
		
		}
	public function delete_kabinet(){
		$this->model_kabinet->delete($this->uri->segment(4));
		redirect('admin/detail');
		}								
	
}/* end { */
