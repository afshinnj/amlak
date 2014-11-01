<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class backup extends Admin_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }
	
	public function index()
	{
	    
	  if(!file_exists('./db-backup')){
	     mkdir('./db-backup',0777,TRUE);
	  }
	  	 
	  $map = get_dir_file_info("./db-backup/");
	  $data['file']= $map;
		$this->nikcms->out('backup','backup',$data);
			
	}
	
	public function create(){
		$this->load->dbutil();
		// Backup your entire database and assign it to a variable
		$prefs = array(
			'format'      => 'txt',             // gzip, zip, txt
			'filename'    => 'mybackup',    // File name - NEEDED ONLY WITH ZIP FILES
			'newline'     => "\n"               // Newline character used in backup file
		  );
	  $backup =& $this->dbutil->backup($prefs); 
	  
		// Load the file helper and write the file to your server
		$name = date('Y-m-d');
		write_file('db-backup/'.$name.'.sql', $backup); 
		
		redirect('admin/backup');
		}
		
	public function download(){
		$file = $this->uri->segment(4);
		$folder = file_get_contents("db-backup/".$file);
		force_download($file,$folder);	
		}
		
	public function delete(){
		$file = $this->uri->segment(4);
		@unlink("db-backup/".$file);
		redirect('admin/backup');
		}		
	
	public function restore(){
			
			$yeni = explode(";\n", read_file('./db-backup/'.$this->uri->segment(4)));
			foreach($yeni as $sql){
				if(trim($sql) != ''){
					 $this->db->query(trim($sql));
				}
			} 
			redirect('admin/backup');
		}	
}/* end { */

/* End of file backup.php */
/* Location: ./blog/controllers/admin.php */