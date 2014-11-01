<?php
function banner ()
{
	$CI =& get_instance();
	 $date = $CI->nikdate->date("Y/m/d",NULL,FALSE);
	 $_count = $CI->model_banner->count_db_results(array('date >='=>$date));
	
	if ($_count == 1){
		
		$result = $CI->model_banner->get_by(array('date >='=> $date),1,1);
		$image = NULL ;
		$id = NULL ;
		foreach($result as $row){
			$id = $row->id;
			$image = $row->image;
			$data = array('show'=>1);
			$CI->model_banner->save($data,$id);
			}
		return anchor('ads/'.$id, "<img  src='".site_url("images/banner/$image")."'/>"); 
		}else{
	
	$count =  $CI->model_banner->count_db_results(array('show'=>0));	
	if($count == 0){
		$data = array('show'=>0);
		$CI->db->update('banner',$data);
		}
	
	$result = $CI->model_banner->get_by(array('date >='=> $date, 'show' => 0),1,1);
	if($result){
	$image = NULL ;
	$id = NULL ;
	foreach($result as $row){
		$id = $row->id;
		$image = $row->image;
		$data = array('show'=>1);
		$CI->model_banner->save($data,$id);
		}
		return anchor('ads/'.$id, "<img  src='".site_url("images/banner/$image")."'/>"); 
	}/* end if $result */
		}
	
}
