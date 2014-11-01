<?php
function slide ()
{
	$CI =& get_instance();
	$where = "ads_type ='2' AND advertisement.active ='1'";
	$CI->db->select('home.*, homeimage.name, home_status.status_id, status.title_vagozary, noe_melk.title_noe_melk');
	$CI->db->where($where);
	$CI->db->from('advertisement');
	$CI->db->group_by('advertisement.code_melk');
	$CI->db->join('home', 'advertisement.code_melk = home.code_melk');
	$CI->db->join('home_status', 'advertisement.code_melk = home_status.code');
	$CI->db->join('homeimage', 'advertisement.code_melk = homeimage.id_home');		
	$CI->db->join('noe_melk', 'home.noe_melk = noe_melk.id');
	$CI->db->join('status', 'home_status.status_id = status.id');
	$query = $CI->db->get()->result();
	
	if($query){
				foreach($query as $row){
				$url = 'details/'.$row->id;
				$return =  '<a href="'.site_url($url).'">';
				$return .=  '
				<img src="'.site_url('images/home/'.$row->name).'" data-thumb="'.site_url('images/home/'.$row->name).'" alt="'.$row->address.'"
				
				title="<strong>'.$row->title_vagozary.' - '.$row->title_noe_melk.'- آدرس : '.$row->address.'</strong>" />';
				
				$return .=  '</a>';
				echo $return;				
		}/* end foreach */

	}/* end if $query */
}
