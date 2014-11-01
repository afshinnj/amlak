<?php
class Model_users extends MY_Model
{
	protected $_table_name = 'admin_user';
	protected $_order_by = 'id';
		protected $_rules = array(
		'LoginName' => array(
			'field' => 'LoginName', 
			'label' => 'نام کاربری', 
			'rules' => 'trim|required|xss_clean|is_unique[admin_user.LoginName]'
		), 
		'LoginPass' => array(
			'field' => 'LoginPass', 
			'label' => 'رمز عبور', 
			'rules' => 'trim|required|min_length[6]|max_length[12]|matches[LoginPassconf]'
		),
		'LoginPassfconf' => array(
			'field' => 'LoginPassconf', 
			'label' => 'تکرار رمز عبور', 
			'rules' => 'trim|required|min_length[6]|max_length[12]'
		),
		'UserEmail' => array(
			'field' => 'UserEmail', 
			'label' => 'ایمیل', 
			'rules' => 'trim|required|xss_clean|valid_email'
		)
	);



   	public function can_log_in(){
		
		$userName = trim($this->input->post('name',TRUE));
		$pass     = trim($this->input->post('pass',TRUE));
		
		$hash     = $this->nikcms->Pass_hash($pass);
		
		            $this->db->where('LoginName',$userName);
		            $this->db->where('LoginPass',$hash);	
					$this->db->limit(1);				
    	$query    = $this->db->get('admin_user');
		
		if($query->num_rows() == 1){
			return true;
			}else{
			    return false;	
				}
				
		}
		
	public function add_user(){
		$name   = trim($this->input->post('LoginName',TRUE));		
		$pass   = trim($this->input->post('LoginPass'));
		$email  = trim($this->input->post('UserEmail',TRUE));
		$hash   = $this->nikcms->Pass_hash($pass);

		if($name AND $pass){
				$data=(array(
							'LoginName'=>$name,
							'LoginPass'=>$hash,
							'UserEmail'=>$email));
			$this->model_users->save($data);
			}
	}
		
	public function update(){
		$name   = $this->input->post('LoginName',TRUE);
		$pass   = $this->input->post('LoginPass');
		$email  = $this->input->post('UserEmail',TRUE);
		$hash = $this->nikcms->Pass_hash($pass);
		if($name AND $hash){
						$data=(array(
						'LoginName'=>$name,
						'LoginPass'=>$hash,
						'UserEmail'=>$email));
			$id = $this->input->post('id',TRUE);
			$this->model_users->save($data,$id);
			}
		}			

}