<?php
class Frontend_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
		
		if($this->session->userdata('user_is_logged_in') == FALSE){
			$this->session->sess_destroy();
			redirect('user_login');
			}
	}
}