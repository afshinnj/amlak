<?php
function page ($status,$page) 
{
	$CI =& get_instance();

	
	$config['base_url'] = site_url('list/'.$status);
	$config['total_rows'] = $page;
	$config['per_page'] = 10;
	
	$config['next_link'] = FALSE;
	$config['prev_link'] = FALSE;
    //$config['next_link'] = 'بعدی>';
	//$config['prev_link'] = 'قبلی';
			  
	$config['last_link'] = FALSE;
	$config['first_link'] = FALSE;
	
	$config['uri_segment'] = 3;
	

	
	$config['cur_tag_open'] = '<div class="cur_tag">';
	$config['cur_tag_close'] = '</div>';
	
	$config['num_tag_open'] = '<div class="num_tag">';
	$config['num_tag_close'] = '</div>';

	
	$CI->pagination->initialize($config);
	echo $CI->pagination->create_links();
}
