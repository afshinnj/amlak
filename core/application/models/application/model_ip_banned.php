<?php
class Model_ip_banned extends MY_Model
{
	protected $_table_name = 'ip_banned';
	protected $_order_by = 'id';
		
	public function banned(){
		$quant=0;
		$result = $this->model_ip_banned->get_by(array('ip'=>$_SERVER['REMOTE_ADDR']));
		if($result){
			foreach($result as $row){
				$quant = $row->quant;
				}
		}
		if($quant == 5){
			    return TRUE;
			}else{
				return FALSE;
				}
		}
		
	public function save_ip(){
		  $ip = $_SERVER['REMOTE_ADDR'];
		  $data = array('ip'=>$ip,'quant'=>1,'timestamp'=>time());
		  $result = $this->model_ip_banned->get_by(array('ip'=>$ip));
		  $expire = time()- 7200;
			$this->model_ip_banned->delete_by('timestamp <', $expire);	
		  if($result == NULL){
			  $this->model_ip_banned->save($data);
		  }else{
			  foreach($result as $row){
				  $id = $row->id;
				  $quant = $row->quant;
			  }
		  if($quant <= 5){
				  $data = array('quant'=>$quant+1);
				  $this->model_ip_banned->save($data,$id);
				  }else{
					  return TRUE;
					  }
			  }
		
		}	
}