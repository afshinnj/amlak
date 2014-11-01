<?php
class Model_ostan extends MY_Model
{

	protected $_table_name = 'autopopulate';
	protected $_order_by = 'id';
	protected $_rules = array(
		'ostan' => array(
			'field' => 'ostan', 
			'label' => 'نام استان', 
			'rules' => 'trim|required|xss_clean'
		)
	);	
	
	public function delete(){
		$ostanId = $this->uri->segment(3);
		$this->db->where('id_ostan',$ostanId);
		$data = $this->db->get('shahrestan')->result();
		foreach($data as $row){
			$shahrestanId = $row->id;
			}

		
		$this->db->where('id_shahrestan',$shahrestanId);
		$this->db->delete('mantage');
		
		$this->db->where('id_ostan',$ostanId);	
		$this->db->delete('shahrestan');	
		
		$this->db->where('id',$ostanId);
		$this->db->delete('ostan');
		}
}