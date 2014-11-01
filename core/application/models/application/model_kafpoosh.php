<?php
class Model_kafpoosh extends MY_Model
{

	protected $_table_name = 'kafpoosh';
	protected $_order_by = 'id';
	protected $_rules = array(
		'kafpoosh' => array(
			'field' => 'kafpoosh', 
			'label' => 'نوع کفپوش', 
			'rules' => 'trim|required|xss_clean'
		)
	);


}