<?php

class model_password_reset extends MY_Model{
	
	public function pass_reset(){
			
		$email    = trim($this->input->post('email',TRUE));
		         $this->db->where('UserEmail',$email);
		$query = $this->db->get('admin_user');
		
		if($query->num_rows() == 1){
				$pass     = rand(10e16, 10e20);
				$newPass  = $this->nikcms->Pass_hash($pass);
				
				$data = array('LoginPass'=>$newPass);
				$this->db->where('UserEmail',$email);
				$this->db->update('admin_user',$data);
					
				$emailTemplate = $this->model_email_template->get_by(array('id'=>1));
				foreach( $emailTemplate as $row ){
					$template['tem'] = $row->template;
					$template['title'] = $row->title;
					}
				
				
				$WebTitle = $this->model_web_config->get();
					foreach($WebTitle as $row){
						$WebTitle['title'] = $row->Web_Title;
						}
				
		
				

				$search = array($pass,$template['title'],$WebTitle['title']);	
				$replace = array('%pass%','%title%','%webName%');	
				$message = str_replace($replace,$search,$template['tem']);
				
						
				$config['mailtype'] = 'html';
				
				$this->email->initialize($config);	
				$this->email->from('ResetPass', $WebTitle['title']);
				$this->email->to($email);
				
				$this->email->subject('بازیابی رمز عبور');
				$this->email->message($message);
				
				$this->email->send();
				return TRUE;
				
			} else {
				
				return FALSE;
				
				}
			
		}

	}