<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }
	
	public function index(){
		if($this->model_ip_banned->banned() == TRUE){
			redirect('login/banned');
			}
		$msg['msg']=null;		
		$this->form_validation->set_rules('name','نام کاربری','required|trim|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('pass','رمز عبور','required|trim|md5');
		
		if(! $this->form_validation->run()){
			  $this->load->view('admin/Login/login',$msg);
			}
		}
		
	public function validate_credentials(){

		if($this->model_users->can_log_in()){
			$data=array('name'=>$this->input->post('name',TRUE),'is_logged_in'=>1);
			$this->session->set_userdata($data);		
     		redirect('admin');
			return true;
			} else {
				$this->model_ip_banned->save_ip();
				if($this->model_ip_banned->banned() == TRUE){
					redirect('login/banned');
					}
			}
				$this->form_validation->set_message('validate_credentials','نام کار بری یا رمز عبور اشتباه است.');
				return false;
			
	}
	
	public function banned(){
		if($this->model_ip_banned->banned() == FALSE){
			redirect('login');
			} else{
		   $this->load->view('admin/Login/banned');
			}
		}
	//--- Password reset ---\\

	public function passReset(){
			$data = $this->model_password_reset->pass_reset();
			if($data == 1){
				$msg['msg'] = 'رمز عبور جدید به ایمیل شما ارسال شد .';
				$this->load->view('admin/Login/login',$msg); 
				} else {
					$msg['msg'] = 'ایمیل شما نا معتبر است .';
					$this->load->view('admin/Login/login',$msg); 
					}		
		}
			
	public function user_logout(){
		$this->session->sess_destroy();
		redirect('login');
		}			
	
	
}/* end { */

/* End of file login.php */
/* Location: ./blog/controllers/login.php */