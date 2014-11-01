<?php
class Model_type_home extends MY_Model
{

	protected $_table_name = 'noe_melk';
	protected $_order_by = 'id';
	protected $_rules = array(
		'melk' => array(
			'field' => 'melk', 
			'label' => 'نوع ملک', 
			'rules' => 'trim|required|xss_clean'
		)
	);


}