<?php

class model_send_email extends CI_Model{
	
	/*=== تماس با ما ===*/
	public function send_email(){
		
		$data = $this->model_web_config->get();
		foreach($data as $row){
			$data['email']=$row->Admin_Email;
			}
		$name  = $this->input->post('name',TRUE);
		$email = $this->input->post('email',TRUE);
		$to    = $data['email'];
		$message = $this->input->post('message',TRUE);
		$captcha = $this->input->post('captcha');
		$match_captch =  $this->nikcms->match_captch($captcha);
		if($match_captch == true){
			$this->email->from($email, $name);
			$this->email->to($to);
			$this->email->subject('تماس با ما');
			$this->email->message($message);
		    $data = $this->email->send();
		    return 'OK';
			}else{
				return 'no';
				}
		}
		
		/*=== ارسال ایمیل به کار بر در جواب به نظر کاربر ===*/
	public function comment_send_email(){
		$data = $this->model_web_config->get();
		foreach($data as $row){
			$email=$row->Admin_Email;
			$title=$row->Web_Title;
			}
			
		$to = $this->input->post('email');
		
		$emailTemplate = $this->model_email_template->get_by(array('id'=>3));
		foreach( $emailTemplate as $row ){
			$template['tem'] = $row->template;
			$template['title'] = $row->title;
			}
		
		
		$WebTitle = $this->model_web_config->get();
			foreach($WebTitle as $row){
				$WebTitle['title'] = $row->Web_Title;
				}
		
		
				
		$message = $this->input->post('answer');	
		$search  = array($message,$template['title'],$WebTitle['title']);	
		$replace = array('%message%','%title%','%webName%');	
		$message = str_replace($replace,$search,$template['tem']);
			
		
		
		$config['mailtype'] = 'html';
        $this->email->initialize($config);
		
			$this->email->from($email, $title);
			$this->email->to($to);
			$this->email->subject('جواب مدیر');
			$this->email->message($message);
		    $data = $this->email->send();
		    return 'OK';
		}	
		
	/*=== ارسال ایمیل به مدیر وقتی کاربری نظر بدهد ===*/
	public function comment_send_admin($name, $email, $text){ 
		$id = $this->input->post('articleId');
		$data = $this->model_web_config->get();
		foreach($data as $row){
			$to=$row->Admin_Email;
			}
			
		$name  = htmlspecialchars(mysql_real_escape_string($name));
		$email = htmlspecialchars(mysql_real_escape_string($email));
		
		$emailTemplate = $this->model_email_template->get_by(array('id'=>2));
		foreach( $emailTemplate as $row ){
			$template['tem'] = $row->template;
			$template['title'] = $row->title;
			}
		
		
		$WebTitle = $this->model_web_config->get();
			foreach($WebTitle as $row){
				$WebTitle['title'] = $row->Web_Title;
				}
		
		
				
		$message = htmlspecialchars(mysql_real_escape_string($text));	
		$search  = array($message,$template['title'],$WebTitle['title']);	
		$replace = array('%message%','%title%','%webName%');	
		$message = str_replace($replace,$search,$template['tem']);

			
		$config['mailtype'] = 'html';
        $this->email->initialize($config);
		
			$this->email->from($email, $name);
			$this->email->to($to);
			$this->email->subject('یک نظر داده شده است');
			$this->email->message($message);
		    $data = $this->email->send();
		    return 'OK';
		
		}
	}