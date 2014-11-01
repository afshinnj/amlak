<?php
function search ($status,$ostan,$shahrestan,$mantage,$noe_melk,$metraj,$money_max,$money_min)
{
		$CI =& get_instance();
		$get_shahrestan = $CI->model_shahrestan->get_by(array('id'=>$shahrestan));
		foreach($get_shahrestan as $row){
			$shahrestan_name = $row->name;
			}
		$get_mantage = $CI->model_mantage->get_by(array('id'=>$mantage));
		foreach($get_mantage as $row){
			$mantage_name = $row->name;
			}
			
		$where ="id_ostan = $ostan AND id_shahrestan = $shahrestan AND id_mantage = $mantage 
			AND noe_melk = $noe_melk  ".$metraj." AND active = '1'";
		$CI->db->select('autopopulate.name, home.*, noe_melk.title_noe_melk, max_price.min_geymat, max_price.max_geymat');
		$CI->db->where($where);
		$CI->db->from('home');
		$CI->db->join('autopopulate', 'home.id_ostan = autopopulate.id');	
		$CI->db->join('noe_melk', 'home.noe_melk = noe_melk.id');
		$CI->db->join('max_price', 'home.code_melk = max_price.code');
		$query = $CI->db->get()->result();
			foreach($query as $rows){
				 $home_code = $rows->code_melk;
					 echo "<tr bgcolor='#EEF4F5' style='height:30px; text-align:center'>";
					 echo "<td>";
					 echo  anchor("details/$rows->id",$rows->code_melk);
					 echo "</td>";
					 echo "<td> $rows->save_date</td>
						  <td>".$rows->name."</td>
						  <td> ".$shahrestan_name."</td>
						  <td> ".$mantage_name."</td>
						  <td> ".$rows->title_noe_melk."</td>";
					  echo "<td>";
					  echo status($rows->code_melk);
					  echo "</td>";
					  echo "<td> $rows->khab</td>
						  <td> $rows->sen_bana </td>
						  <td> $rows->zirbana</td>
						  <td> $rows->masahat</td>";
					  echo "<td> ";
					  echo prices($rows->code_melk);
					  echo "</td>";
					  echo "</tr>";
						}
			if(!$query){
				echo '<div style="width:400px; margin:5px auto 5px auto; color:#F00; text-align:center; border:1px dashed #CCC;">
						<strong>موردی برای نمایش یافت نشد.</strong>
					 </div>';
				}			

}

