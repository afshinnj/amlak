<?php
class Model_karbary extends MY_Model
{

	protected $_table_name = 'karbary';
	protected $_order_by = 'id';
	protected $_rules = array(
		'karbary' => array(
			'field' => 'karbary', 
			'label' => 'نوع کاربری', 
			'rules' => 'trim|required|xss_clean'
		)
	);


}