<?php
class model_file_manager extends CI_Model{
	
	public function get_Folder(){
	  $map = get_dir_file_info('./images/');
	  return $map;	
		}
	
	public function get_file(){
	  $folder = $this->uri->segment(4);
	 
    	  if($folder){
		      $map = get_dir_file_info("./images/$folder");
		  }else{
			$map = get_dir_file_info("./images/upload");  
			  }
	 
	  return $map;
		}
			
   public function DeleteFile(){
	  $folder = $this->uri->segment(4);
	  $file   = $this->uri->segment(5); 
	  $map    = @unlink("./images/$folder/$file");
	  return $map;
	   }
	
	}