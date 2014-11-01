<?php
class Model_kabinet extends MY_Model
{

	protected $_table_name = 'kabinet';
	protected $_order_by = 'id';
	protected $_rules = array(
		'kabinet' => array(
			'field' => 'kabinet', 
			'label' => 'نوع سرویس', 
			'rules' => 'trim|required|xss_clean'
		)
	);


}