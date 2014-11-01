<?php
function scroll ()
{
	$CI =& get_instance();
	
	$home_image ;
	$expireDate =  $CI->nikdate->date("Ymd",NULL,FALSE);

	$where = "ads_type ='1' AND advertisement.active ='1' AND advertisement.save_date >= '".$expireDate."'";
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
			$return = '<li>';
			$return .=  '<div class="bcontent proj">';
			$return .=  '<div class="bcontent_body">';
			$return .=  '<div class="text">';
			$return .=  '<a href="'.site_url($url).'"><img src="'.site_url('images/home/'. $row->name).'"  /></a>';
			$return .=  '<div class="website"><a href="'.site_url($url).'">'.$row->title_vagozary.' - '.$row->title_noe_melk.'</a><br><br>'.$row->address.'</div>';
			$return .=  '</div>';
			$return .=  '</div>';
			$return .=  '<div class="bcontent_bottom"></div>';
			$return .=  '</div>'; 
			$return .=  '</li>';
			echo  $return;	
		}/* end foreach */
	}else{
			$return = '<li>';
			$return .=  '<div class="bcontent proj">';
			$return .=  '<div class="bcontent_body">';
			$return .=  '<div class="text">';
			$return .=  '<a href=""><img src=""/></a>';
			$return .=  '<div class="website"><a href=""></a></div>';
			$return .=  '</div>';
			$return .=  '</div>';
			$return .=  '<div class="bcontent_bottom"></div>';
			$return .=  '</div>'; 
			$return .=  '</li>';
			echo $return;

	}/*end if $query*/
}
