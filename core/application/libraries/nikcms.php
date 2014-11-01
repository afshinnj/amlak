<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_nikcms
{
	protected $CI;
	
	public function __construct($rules = array())
	{
		$this->CI =& get_instance();

	}
	 public function Pass_hash( $pass )
	 {
		  $salt = '#4osKp86d}.aO_J@QRoN_psk>q#45?';
		  $password = $pass;
		  $hash = do_hash(sha1(base64_encode(md5($salt . $password))));
		  return $hash;
	 }
	
	
	public function match_captch($captcha){
		
		$query = $this->CI->db->limit(1)->get_where('captcha', array('captcha' => $captcha));
		if($query->num_rows() == 0){
			return false;
			}else{
				return true;
				}
		}
	

	 public function captcha(){
		 //$CI =& get_instance();
		 	
			$captcha = rand(100000,999999);
			$data = array('time'=>time(), 'captcha'=>$captcha);
			$this->CI->db->insert('captcha',$data);
			
			$expire = time()- 320;
			$this->CI->db->where('time <', $expire);
			$this->CI->db->delete('captcha');
			
		$vals = array(
			'word' => $captcha,
			'img_path' => './captcha/',
			'img_url' => base_url().'captcha/',
			'font_path' => './assets/fonts/monofont.ttf',
			'img_width' => 120,
			'img_height' => 30,
			'expiration' => 320
			);
		
		   $cap = create_captcha($vals);
		  return $cap['image']; 
		}
		
		//==-- pagination code --==\\
	public function PageCount($controller = NULL, $total_rows = NULL, $tab = NULL,  $segment = NULL){
		      $config['base_url'] = base_url().$controller.'/'.$tab;
			  $config['total_rows'] = $total_rows;
			  $config['per_page'] = 20;
			  
			  $config['next_link'] = FALSE;
			  $config['prev_link'] = FALSE;
			  
			  $config['last_link'] = FALSE;
			  $config['first_link'] = FALSE;
			  
			  $config['uri_segment'] = $segment;
			  
			  $config['num_links'] = 20;
			  
			  $config['cur_tag_open'] = '<li><a>';
			  $config['cur_tag_close'] = '</a></li>';
			  
			  $config['num_tag_open'] = '<li>';
    		  $config['num_tag_close'] = '</li>';
			  
				$config['next_link'] = '&gt;';
				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';
				
				$config['prev_link'] = '&lt;';
				$config['prev_tag_open'] = '<li>';
				$config['prev_tag_close'] = '</li>';
			  $this->CI->pagination->initialize($config);
			  $count = $this->CI->pagination->create_links();
    		  return $count;	
	
		}
	public function out($folder ='panel', $name = 'panel', $data= array('not_things'=>'empty'))
	{
		if ( ! file_exists("core/application/views/admin/".$folder."/".$name.".php"))
			{
				show_404();
    		}
	
        
		$header['date'] = $this->CI->nikdate->date("l j F Y");
        $header['UserName'] = $this->CI->session->all_userdata(); 
		$this->CI->load->view('admin/panel/header',$header);
		$this->CI->load->view("admin/$folder/$name",$data);

    }			
}
 