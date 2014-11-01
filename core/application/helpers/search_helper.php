<?php
function search ($status,$ostan,$shahrestan,$mantage,$noe_melk,$metraj,$money_max,$money_min)
{
   $CI =& get_instance();
	
		$get_ostan = $CI->model_ostan->get_by(array('id'=>$ostan));
		foreach($get_ostan as $row){
			$ostan_name = $row->name;
			}				
		$get_shahrestan = $CI->model_shahrestan->get_by(array('id'=>$shahrestan));
		foreach($get_shahrestan as $row){
			$shahrestan_name = $row->name;
			}
		$get_mantage = $CI->model_mantage->get_by(array('id'=>$mantage));
		foreach($get_mantage as $row){
			$mantage_name = $row->name;
			}
		$get_noe_melk = $CI->model_type_home->get_by(array('id'=>$noe_melk));
		foreach($get_noe_melk as $row){
			$noe_melk_name = $row->title_noe_melk;
			}
	
	if($status == 1){
		$home_code = NULL;
		$status_where = "status_id >='3'";
	    $code = $CI->model_home_status->group_by($status_where,'code');
		foreach($code as $row){
			$where ="id_ostan = $ostan AND id_shahrestan = $shahrestan AND id_mantage = $mantage 
			AND noe_melk = $noe_melk  ".$metraj." AND code_melk = $row->code";
			$result = $CI->model_home->get_by($where);
			
				foreach($result as $rows){
					
						$ma = $CI->model_max_price->get_by(array('code'=> $rows->code_melk));
						foreach($ma as $rowMoney){
							 $max_geymat = $rowMoney->max_geymat;
							}
							
						if($max_geymat >= $money_min AND $max_geymat <= $money_max ){
							$home_code = $rows->code_melk;
							   echo "<tr bgcolor='#EEF4F5' style='height:30px; text-align:center'>";
							   echo "<td>";
							   echo  anchor("details/$rows->id",$rows->code_melk);
							   echo "</td>";
							   echo "<td> $rows->save_date</td>
									<td>".$ostan_name."</td>
									<td> ".$shahrestan_name."</td>
									<td> ".$mantage_name."</td>
									<td> ".$noe_melk_name."</td>";
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
							else{
								$home_code = $rows->code_melk;
							   echo "<tr bgcolor='#EEF4F5' style='height:30px; text-align:center'>";
							   echo "<td>";
							   echo  anchor("details/$rows->id",$rows->code_melk);
							   echo "</td>";
							   echo "<td> $rows->save_date</td>
									<td>".$ostan_name."</td>
									<td> ".$shahrestan_name."</td>
									<td> ".$mantage_name."</td>
									<td> ".$noe_melk_name."</td>";
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

				}//foreach

		 }
			if($home_code == NULL){
				echo '<div style="width:400px; margin:5px auto 5px auto; color:#F00; text-align:center; border:1px dashed #CCC;">
						<strong>موردی برای نمایش یافت نشد.</strong>
					 </div>';
					}
		} // $status
		
		if($status == 2){
		$home_code1 = NULL;	
		$status_where = "status_id <='2'";
	    $code = $CI->model_home_status->group_by($status_where,'code');
		foreach($code as $row){
			$where ="id_ostan = $ostan AND id_shahrestan = $shahrestan AND id_mantage = $mantage 
			AND noe_melk = $noe_melk  ".$metraj." AND code_melk = $row->code";			
			$result = $CI->model_home->get_by($where);
				 foreach($result as $rows){
					 $home_code1 = $rows->code_melk;
					   echo "<tr bgcolor='#EEF4F5' style='height:30px; text-align:center'>";
					   echo "<td>";
					   echo  anchor("details/$rows->id",$rows->code_melk);
					   echo "</td>";
					   echo "<td> $rows->save_date</td>
							<td>".$ostan_name."</td>
							<td> ".$shahrestan_name."</td>
							<td> ".$mantage_name."</td>
							<td> ".$noe_melk_name."</td>";
						echo "<td> ";
						echo status($rows->code_melk);
						echo "</td>";
						echo "<td> $rows->khab</td>
							<td> $rows->sen_bana </td>
									<td> $rows->zirbana</td>
									<td> $rows->masahat</td>";
						echo "<td> ";
						echo price($rows->code_melk);
						echo "</td>";
						echo "</tr>";
				 }
		 }
		 	if($home_code1 == NULL){
				echo '<div style="width:400px; margin:5px auto 5px auto; color:#F00; text-align:center; border:1px dashed #CCC;">
						<strong>موردی برای نمایش یافت نشد.</strong>
					 </div>';
					}
		} // $status	2		

}

