<?php
class model_expire extends CI_Model
{
	

	public function expire(){
		
		$expire_Date =  $this->nikdate->date("Y/m/d",NULL,FALSE);
		$data = array('active'=>'0');
		
		$this->model_home->save_by($data,'etbar <=',$expire_Date);
		$this->model_darkhast->save_by($data,'etbar <=',$expire_Date);
		
		
		
		$expireDate =  $this->nikdate->date("Ymd",NULL,FALSE);
		$this->model_advertisement->save_by($data,'save_date <=',$expireDate);
		}


}