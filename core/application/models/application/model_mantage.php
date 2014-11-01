<?php
class Model_mantage extends MY_Model
{

	protected $_table_name = 'autopopulate';
	protected $_order_by = 'id';
	protected $_rules = array(
		'mantage' => array(
			'field' => 'mantage', 
			'label' => 'نام منطقه', 
			'rules' => 'trim|required|xss_clean'
		)
	);


}