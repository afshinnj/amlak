<?php
class Model_nama extends MY_Model
{

	protected $_table_name = 'nama';
	protected $_order_by = 'id';
	protected $_rules = array(
		'nama' => array(
			'field' => 'nama', 
			'label' => 'نوع نما', 
			'rules' => 'trim|required|xss_clean'
		)
	);


}