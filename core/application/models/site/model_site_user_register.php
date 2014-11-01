<?php
class Model_site_user_register extends MY_Model
{
	protected $_table_name = 'site_user';
	protected $_order_by = 'id';
		protected $_rules = array(
		'userName' => array(
			'field' => 'userName', 
			'label' => 'نام و نام خانوادگی', 
			'rules' => 'trim|required|xss_clean|is_unique[site_user.userName]'
		),'email' => array(
			'field' => 'email', 
			'label' => 'شناسه کاربری', 
			'rules' => 'trim|required|xss_clean|min_length[6]|is_unique[site_user.userEmail]'
		), 
		'password' => array(
			'field' => 'password', 
			'label' => 'رمز عبور', 
			'rules' => 'trim|required|min_length[6]|max_length[30]|matches[rpassword]'
		),
		'rpassword' => array(
			'field' => 'rpassword', 
			'label' => 'تکرار رمز عبور', 
			'rules' => 'trim|required|min_length[6]|max_length[30]|matches[rpassword]'
		),
		'homeTell' => array(
			'field' => 'homeTell', 
			'label' => 'تلفن ثابت', 
			'rules' => 'trim|xss_clean|numeric'
		),
		'mobileTell' => array(
			'field' => 'mobileTell', 
			'label' => 'تلفن همراه', 
			'rules' => 'trim|required|xss_clean|numeric'
		),
		'address' => array(
			'field' => 'address', 
			'label' => 'آدرس', 
			'rules' => 'trim|required|xss_clean'
		)
		
	);

	public function save_user(){
		//بخش ثبت نام کاربر در سایت
		$name         = $this->input->post('userName',TRUE);
		$email        = $this->input->post('email',TRUE);		
		$pass         = $this->input->post('password',TRUE);
		$rpass        = $this->input->post('rpassword',TRUE);
		$homeTell     = $this->input->post('homeTell',TRUE);
		$mobileTell   = $this->input->post('mobileTell',TRUE);
		$address      = $this->input->post('address',TRUE);
		
		$hash         = $this->nikcms->Pass_hash($pass);
		
		$captcha = $this->input->post('captcha');
		$match_captch =  $this->nikcms->match_captch($captcha);
		if($match_captch == TRUE){
			$data=(array('userName'=>$name,'userEmail'=>$email,
							'userPass'=>$hash,'homeTell'=>$homeTell,
							   'mobileTell'=>$mobileTell,'userAdd'=>$address));
			    $this->model_site_user->save($data);
				$login = $this->login_after_reg($email,$pass);
				if($login == TRUE){
					//$this->sms->send($mobileTell);
					return TRUE;	
					}		   
					   
			} else {
				return FALSE;
				}	
	}
	
	private function login_after_reg($email,$pass){
		$email = trim($email);
		$pass     = trim($pass);
		
		$hash     = $this->nikcms->Pass_hash($pass);
		
		            $this->db->where('userEmail',$email);
		            $this->db->where('userPass',$hash);	
					$this->db->limit(1);				
    	$query    = $this->db->get('site_user');
		
		if($query->num_rows() == 1){
		
			$for = $this->model_site_user->get_by(array('userEmail'=>$this->input->post('email',TRUE)));
				foreach($for as $row){
					$id = $row->id;
					$email = $row->userEmail;
					}
						
			$data=array('id'=>$id,'UserName'=>$email,'user_is_logged_in'=>1);
			$this->session->set_userdata($data);
			
			return true;
			}else{
			    return false;	
				}
		
		}
	

}