<?php
class Admin_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
        //$this->data['meta_title'] = $this->session->userdata('is_logged_in');
		if($this->session->userdata('is_logged_in') == FALSE){
			redirect('login');
			}
	}

}