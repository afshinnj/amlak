<?php
class Model_site_user extends MY_Model
{
	protected $_table_name = 'site_user';
	protected $_order_by = 'id';
		protected $_rules = array(
		'userName' => array(
			'field' => 'userName', 
			'label' => 'نام و نام خانوادگی', 
			'rules' => 'trim|required|xss_clean|is_unique[site_user.userName]'
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
		)
	);



   	public function can_log_in($email,$pass){
		
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