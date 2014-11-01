<?php
class Model_shahrestan extends MY_Model
{

	protected $_table_name = 'autopopulate';
	protected $_order_by = 'id';
	protected $_rules = array(
		'ostan' => array(
			'field' => 'ostan', 
			'label' => 'نام استان', 
			'rules' => 'trim|required|xss_clean'
		),'shahrestan' => array(
			'field' => 'shahrestan', 
			'label' => 'نام شهرستان', 
			'rules' => 'trim|required|xss_clean'
		)
	);
	
/*	public function delete(){
		$Id = $this->uri->segment(4);

		$this->db->where('id_shahrestan',$Id);
		$this->db->delete('autopopulate');
		
		$this->db->where('id',$Id);	
		$this->db->delete('autopopulate');	
		}
*/
}