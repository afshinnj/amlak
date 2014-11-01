<?php
class Model_sanad extends MY_Model
{

	protected $_table_name = 'sanad';
	protected $_order_by = 'id';
	protected $_rules = array(
		'sanad' => array(
			'field' => 'sanad', 
			'label' => 'نوع سند', 
			'rules' => 'trim|required|xss_clean'
		)
	);


}