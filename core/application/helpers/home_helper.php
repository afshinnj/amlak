<?php
function home_kharid(){
	$CI =& get_instance();
	//$date = $CI->nikdate->date("Y/m/d",NULL,FALSE);
		$where = "status_id >='3' AND active = '1'";
		$CI->db->select('autopopulate.name, home.*, home_status.status_id, noe_melk.title_noe_melk');
		$CI->db->where($where);
		$CI->db->from('home_status');
		$CI->db->limit(5);
		$CI->db->order_by('home.id','DESC');
		$CI->db->group_by('code');
		$CI->db->join('home', 'home_status.code = home.code_melk');
		$CI->db->join('noe_melk', 'home.noe_melk = noe_melk.id');
		$CI->db->join('autopopulate', 'home.id_ostan = autopopulate.id');			
		$query = $CI->db->get()->result();
		foreach($query as $row){
			$shahrestan = $CI->model_ostan->get_by(array('id'=>$row->id_shahrestan));
			foreach($shahrestan as $rows){
				$shahrestanName = $rows->name;
				}	
			$mantage = $CI->model_ostan->get_by(array('id'=>$row->id_mantage));
			foreach($mantage as $rows){
				$mantageName = $rows->name;
				}
			if($shahrestan == NULL){$shahrestanName ='';}
			if($mantage == NULL){$mantageName ='';}	
		
		echo '<div class="new_app_item"> <a href="'.site_url("details/$row->id").'">'.$row->name.' , '.$shahrestanName.' , '.$mantageName.' , 
		'.$row->title_noe_melk.'</a></div>';
			}
}


function home_ejare(){
	$CI =& get_instance();
	//$date = $CI->nikdate->date("Y/m/d",NULL,FALSE);

		$where = "status_id <='2' AND active = '1'";
		$CI->db->select('autopopulate.name, home.*, home_status.status_id, noe_melk.title_noe_melk');
		$CI->db->where($where);
		$CI->db->from('home_status');
		$CI->db->limit(5);
		$CI->db->order_by('home.id','DESC');
		$CI->db->group_by('code');
		$CI->db->join('home', 'home_status.code = home.code_melk');
		$CI->db->join('noe_melk', 'home.noe_melk = noe_melk.id');
		$CI->db->join('autopopulate', 'home.id_ostan = autopopulate.id');	
		$query = $CI->db->get()->result();
		foreach($query as $row){			
			$shahrestan = $CI->model_ostan->get_by(array('id'=>$row->id_shahrestan));
			foreach($shahrestan as $rows){
				$shahrestanName = $rows->name;
				}
			$mantage = $CI->model_ostan->get_by(array('id'=>$row->id_mantage));
			foreach($mantage as $rows){
				$mantageName = $rows->name;
				}
			if($shahrestan == NULL){$shahrestanName ='';}
			if($mantage == NULL){$mantageName ='';}	
		
		echo '<div class="new_app_item"> <a href="'.site_url("details/$row->id").'">'.$row->name.' , '.$shahrestanName.' , '.$mantageName.' , 
		'.$row->title_noe_melk.'</a></div>';
			}	
}


function darkhast_ejare(){

	$CI =& get_instance();
	//$date = $CI->nikdate->date("Y/m/d",NULL,FALSE);
		$where = "status_id <='2' AND active = 1";
		$CI->db->select('autopopulate.name, darkhast.*, home_status.status_id, noe_melk.title_noe_melk');
		$CI->db->where($where);
		$CI->db->from('home_status');
		$CI->db->limit(5);
		$CI->db->order_by('darkhast.id','DESC');
		$CI->db->group_by('home_status.code');
		$CI->db->join('darkhast', 'home_status.code = darkhast.code');
		$CI->db->join('noe_melk', 'darkhast.id_noeMelk = noe_melk.id');
		$CI->db->join('autopopulate', 'darkhast.id_ostan = autopopulate.id');	
		$query = $CI->db->get()->result();
		foreach($query as $row){
			$shahrestan = $CI->model_ostan->get_by(array('id'=>$row->id_shahrestan));
			foreach($shahrestan as $rowSh){
				$shahrestanName = $rowSh->name;
				}
				
			$mantage = $CI->model_ostan->get_by(array('id'=>$row->id_mantage));
			foreach($mantage as $rowM){
				$mantageName = $rowM->name;
				}
	
			if($shahrestan == NULL){$shahrestanName ='';}
			if($mantage == NULL){$mantageName ='';}	

		echo '<div class="new_app_item"> <a href="detail/'.$row->id.'">'.$row->name.' , '.$shahrestanName.' , '.$mantageName.' , '.$row->title_noe_melk.'</a></div>';
			}

}	

function darkhast_kharid(){
	
	$CI =& get_instance();
	//$date = $CI->nikdate->date("Y/m/d",NULL,FALSE);
	$where = "status_id >='3' AND status_id <='5' AND active = 1";
		$CI->db->select('autopopulate.name, darkhast.*, home_status.status_id, noe_melk.title_noe_melk');
		$CI->db->where($where);
		$CI->db->from('home_status');
		$CI->db->limit(5);
		$CI->db->order_by('darkhast.id','DESC');
		$CI->db->group_by('home_status.code');
		$CI->db->join('darkhast', 'home_status.code = darkhast.code');
		$CI->db->join('noe_melk', 'darkhast.id_noeMelk = noe_melk.id');
		$CI->db->join('autopopulate', 'darkhast.id_ostan = autopopulate.id');
			
		$query = $CI->db->get()->result();
		foreach($query as $row){
			$shahrestan = $CI->model_ostan->get_by(array('id'=> $row->id_shahrestan));
			foreach($shahrestan as $rows){
				$shahrestanName = $rows->name;
				}
				
			$mantage = $CI->model_ostan->get_by(array('id'=>$row->id_mantage));
			foreach($mantage as $rows){
				$mantageName = $rows->name;
				}

		echo '<div class="new_app_item"> <a href="detail/'.$row->id.'">'.$row->name.' , '.$shahrestanName.' , '.$mantageName.' , '.$row->title_noe_melk.'</a></div>';
			}
}	
		



