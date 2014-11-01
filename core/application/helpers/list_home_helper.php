<?php
function list_home ($list,$page)
{
	/*لیست خانه های فروشی*/
	if($list == 1){
		$CI =& get_instance();
		//$date = $CI->nikdate->date("Y/m/d",NULL,FALSE);
		
		$where = "status_id >='3' AND active = '1'";
		$CI->db->select('autopopulate.name, home.*, home_status.status_id, noe_melk.title_noe_melk');
		$CI->db->where($where);
		$CI->db->from('home_status');
		$CI->db->limit(10,$page); 
		$CI->db->order_by('home.id','DESC');
		$CI->db->group_by('code');
		$CI->db->join('home', 'home_status.code = home.code_melk');
		$CI->db->join('noe_melk', 'home.noe_melk = noe_melk.id');
		$CI->db->join('autopopulate', 'home.id_ostan = autopopulate.id');			
		$query = $CI->db->get()->result();
		$pages = 1;
		foreach($query as $row){
			$pages ++;
			$id_shahrestan = $row->id_shahrestan;
			$id_mantage = $row->id_mantage;
			$shahrestan = $CI->model_ostan->get_by(array('id'=>$id_shahrestan));
			foreach($shahrestan as $rowSh){
				$shahrestanName = $rowSh->name;
				}
			$mantage = $CI->model_ostan->get_by(array('id'=>$id_mantage));
			foreach($mantage as $rowM){
				$mantageName = $rowM->name;
				}
			if($shahrestan == NULL){$shahrestanName ='';}
			if($mantage == NULL){$mantageName ='';}			
			   echo "<tr bgcolor='#EEF4F5' style='height:30px; text-align:center'>";
			   echo "<td>";
			   echo  anchor("details/$row->id",$row->code_melk);
			   echo "</td>";
			   echo "<td> $row->save_date</td>
					<td>".$row->name."</td>
					<td> ".$shahrestanName."</td>
					<td> ".$mantageName."</td>
					<td> ".$row->title_noe_melk."</td>";
				echo "<td>";
				echo status($row->code_melk);
				echo "</td>";
				echo "<td> $row->khab</td>
					<td> $row->sen_bana </td>
					<td> $row->zirbana</td>
					<td> $row->masahat</td>";
				echo "<td> ";
				echo prices($row->code_melk);
				echo "</td>";
				echo "</tr>";
			}//end foreeach
			echo "</table>";
			$page = $CI->uri->segment(3);
			if($page == ''){$page = 1;}
			if($pages >10){
				echo "<div class='page'>";
				echo "<div class='des'>صفحه $page - ".$pages ." </div>"; 
				echo "<div class='num'>";
				echo page($list,$pages);
				echo "</div>";
				echo  "</div>";
			}
	 }/*end if  1*/
	 
	/*لیست خانه های اجاره داده شده*/ 
	if($list == 2){
		$CI =& get_instance();
		//$date = $CI->nikdate->date("Y/m/d",NULL,FALSE);
		$where = "status_id <='2' AND active = '1'";
		$CI->db->select('autopopulate.name, home.*, home_status.status_id, noe_melk.title_noe_melk');
		$CI->db->where($where);
		$CI->db->from('home_status');
		$CI->db->limit(10,$page); 
		$CI->db->order_by('home.id','DESC');
		$CI->db->group_by('code');
		$CI->db->join('home', 'home_status.code = home.code_melk');
		$CI->db->join('noe_melk', 'home.noe_melk = noe_melk.id');
		$CI->db->join('autopopulate', 'home.id_ostan = autopopulate.id');			
		$query = $CI->db->get()->result();
		$pages = 1;
		foreach($query as $row){
			$pages ++;
			$id_shahrestan = $row->id_shahrestan;
			$id_mantage = $row->id_mantage;
			$shahrestan = $CI->model_ostan->get_by(array('id'=>$id_shahrestan));
			foreach($shahrestan as $rowSh){
				$shahrestanName = $rowSh->name;
				}
			$mantage = $CI->model_ostan->get_by(array('id'=>$id_mantage));
			foreach($mantage as $rowM){
				$mantageName = $rowM->name;
				}
			if($shahrestan == NULL){$shahrestanName ='';}
			if($mantage == NULL){$mantageName ='';}			
			   echo "<tr bgcolor='#EEF4F5' style='height:30px; text-align:center'>";
			   echo "<td>";
			   echo  anchor("details/$row->id",$row->code_melk);
			   echo "</td>";
			   echo "<td> $row->save_date</td>
					<td>".$row->name."</td>
					<td> ".$shahrestanName."</td>
					<td> ".$mantageName."</td>
					<td> ".$row->title_noe_melk."</td>";
				echo "<td>";
				echo status($row->code_melk);
				echo "</td>";
				echo "<td> $row->khab</td>
					<td> $row->sen_bana </td>
					<td> $row->zirbana</td>
					<td> $row->masahat</td>";
				echo "<td> ";
				echo prices($row->code_melk);
				echo "</td>";
				echo "</tr>";	
			}//end foreeach
			echo "</table>";
			$page = $CI->uri->segment(3);
			if($page == ''){$page = 1;}
			if($pages > 10){
				echo "<div class='page'>";
				echo "<div class='des'>صفحه $page - ".$pages ." </div>"; 
				echo "<div class='num'>";
				echo page($list,$pages);
				echo "</div>";
				echo  "</div>";
			}
	 }/*end if  2*/

	/*لیست خانه های درخواستی فروش داده شده*/ 
	if($list == 3){
		$CI =& get_instance();
		//$date = $CI->nikdate->date("Y/m/d",NULL,FALSE);
	    $where = "status_id >='3' AND status_id <='5' AND active = 1";
		$CI->db->select('autopopulate.name, darkhast.*, home_status.status_id, noe_melk.title_noe_melk');
		$CI->db->where($where);
		$CI->db->from('home_status');
		$CI->db->limit(10,$page);
		$CI->db->order_by('darkhast.id','DESC');
		$CI->db->group_by('home_status.code');
		$CI->db->join('darkhast', 'home_status.code = darkhast.code');
		$CI->db->join('noe_melk', 'darkhast.id_noeMelk = noe_melk.id');
		$CI->db->join('autopopulate', 'darkhast.id_ostan = autopopulate.id');		
		$query = $CI->db->get()->result();
		$pages = 1;
		foreach($query as $row){
			$pages ++;
			$id_shahrestan = $row->id_shahrestan;
			$id_mantage = $row->id_mantage;
			$shahrestan = $CI->model_ostan->get_by(array('id'=>$id_shahrestan));
			foreach($shahrestan as $rowSh){
				$shahrestanName = $rowSh->name;
				}
			$mantage = $CI->model_ostan->get_by(array('id'=>$id_mantage));
			foreach($mantage as $rowM){
				$mantageName = $rowM->name;
				}
			if($shahrestan == NULL){$shahrestanName ='';}
			if($mantage == NULL){$mantageName ='';}			
			   echo "<tr bgcolor='#EEF4F5' style='height:30px; text-align:center'>";
			   echo "<td>";
			   echo  anchor("detail/$row->id",$row->code);
			   echo "</td>";
			   echo "<td> $row->save_date</td>
					<td>".$row->name."</td>
					<td> ".$shahrestanName."</td>
					<td> ".$mantageName."</td>
					<td> ".$row->title_noe_melk."</td>";
				echo "<td>";
				echo status($row->code);
				echo "</td>";
				echo "<td> $row->tedad_khab</td>
					<td> $row->sen_bana </td>
					<td> $row->metraj</td>
					<td></td>";
				echo "<td> ";
				echo price($row->code);
				echo "</td>";
				echo "</tr>";
			}//end foreeach
			echo "</table>";
			$page = $CI->uri->segment(3);
			if($page == ''){$page = 1;}
			if($pages >10){
				echo "<div class='page'>";
				echo "<div class='des'>صفحه $page - ".$pages ." </div>"; 
				echo "<div class='num'>";
				echo page($list,$pages);
				echo "</div>";
				echo  "</div>";
			}
	 }/*end if  3*/
	 
	/*لیست خانه های درخواستی اجاره داده شده*/ 
	if($list == 4){
		$CI =& get_instance();
		//$date = $CI->nikdate->date("Y/m/d",NULL,FALSE);
		$where = "status_id <='2' AND active = 1";
		$CI->db->select('autopopulate.name, darkhast.*, home_status.status_id, noe_melk.title_noe_melk');
		$CI->db->where($where);
		$CI->db->from('home_status');
		$CI->db->limit(10,$page);
		$CI->db->order_by('darkhast.id','DESC');
		$CI->db->group_by('home_status.code');
		$CI->db->join('darkhast', 'home_status.code = darkhast.code');
		$CI->db->join('noe_melk', 'darkhast.id_noeMelk = noe_melk.id');
		$CI->db->join('autopopulate', 'darkhast.id_ostan = autopopulate.id');
		$query = $CI->db->get()->result();
		$pages = 1;
		foreach($query as $row){
			$pages ++;
			$id_shahrestan = $row->id_shahrestan;
			$id_mantage = $row->id_mantage;
			$shahrestan = $CI->model_ostan->get_by(array('id'=>$id_shahrestan));
			foreach($shahrestan as $rowSh){
				$shahrestanName = $rowSh->name;
				}
			$mantage = $CI->model_ostan->get_by(array('id'=>$id_mantage));
			foreach($mantage as $rowM){
				$mantageName = $rowM->name;
				}
			if($shahrestan == NULL){$shahrestanName ='';}
			if($mantage == NULL){$mantageName ='';}			
			   echo "<tr bgcolor='#EEF4F5' style='height:30px; text-align:center'>";
			   echo "<td>";
			   echo  anchor("details/$row->id",$row->code);
			   echo "</td>";
			   echo "<td> $row->save_date</td>
					<td>".$row->name."</td>
					<td> ".$shahrestanName."</td>
					<td> ".$mantageName."</td>
					<td> ".$row->title_noe_melk."</td>";
				echo "<td>";
				echo status($row->code);
				echo "</td>";
				echo "<td> $row->tedad_khab</td>
					<td> $row->sen_bana</td>
					<td> $row->metraj</td>
					<td> </td>";
				echo "<td> ";
				echo price($row->code);
				echo "</td>";
				echo "</tr>";
			}//end foreeach
				echo "</table>";
			$page = $CI->uri->segment(3);
			if($page == ''){$page = 1;}
			if($pages > 10){
				echo "<div class='page'>";
				echo "<div class='des'>صفحه $page - ".$pages ." </div>"; 
				echo "<div class='num'>";
				echo page($list,$pages);
				echo "</div>";
				echo  "</div>";
			}
	 }/*end if  4*/	 
	 
}

