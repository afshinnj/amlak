<?php
class model_price extends MY_Model
{

	public function rahn($code,$s_price_minRahn,$min_rahn_price,$s_price_maxRahn,$max_rahn_price){
		
		if($s_price_minRahn == 1){
			$max = array('code'=>$code,'min_rahn'=> $min_rahn_price);
			$this->model_max_price->save_by($max,'code',$code);
							
			$max1 = array('code'=>$code,'min_rahn'=> '0');
			$this->model_min_price->save_by($max1,'code',$code);							
			
			}
		if($s_price_minRahn == 2){		
			$min = array('code'=>$code,'min_rahn'=>$min_rahn_price);
			$this->model_min_price->save_by($min,'code',$code);				
							
			$min1 = array('code'=>$code,'min_rahn'=>'0');
			$this->model_max_price->save_by($min1,'code',$code);							
			
			}					
		
		if($s_price_maxRahn == 1){
			$max = array('code'=>$code,'max_rahn'=> $max_rahn_price);
			$this->model_max_price->save_by($max,'code',$code);				
							
			$max1 = array('code'=>$code,'max_rahn'=> '0');
			$this->model_min_price->save_by($max1,'code',$code);			
			}
		if($s_price_maxRahn == 2){		
			$min = array('code'=>$code,'max_rahn'=>$max_rahn_price);
			$this->model_min_price->save_by($min,'code',$code);				
							
			$min = array('code'=>$code,'max_rahn'=>'0');
			$this->model_max_price->save_by($min,'code',$code);
			}
		
		} // end function rahn
		
	public function ejare($code,$s_price_minEjare,$min_ejare_price,$s_price_maxEjare,$max_ejare_price){
		if($s_price_minEjare == 1){
			$max = array('code'=>$code,'min_ejare'=> $min_ejare_price);
			$this->model_max_price->save_by($max,'code',$code);				
							
			$max1 = array('code'=>$code,'min_ejare'=> '0');
			$this->model_min_price->save_by($max1,'code',$code);
			}
		if($s_price_minEjare == 2){		
			$min = array('code'=>$code,'min_ejare'=>$min_ejare_price);
			$this->model_min_price->save_by($min,'code',$code);				
							
			$min = array('code'=>$code,'min_ejare'=>'0');
			$this->model_max_price->save_by($min,'code',$code);
			}					
		
		if($s_price_maxEjare == 1){
			$max = array('code'=>$code,'max_ejare'=> $max_ejare_price);
			$this->model_max_price->save_by($max,'code',$code);				
							
			$max = array('code'=>$code,'max_ejare' => '0');
			$this->model_min_price->save_by($max,'code',$code);
			}
		if($s_price_maxEjare == 2){		
			$min = array('code'=>$code,'max_ejare'=>$max_ejare_price);
			$this->model_min_price->save_by($min,'code',$code);				
							
			$min = array('code'=>$code,'max_ejare'=>'0');
			$this->model_max_price->save_by($min,'code',$code);
			}
		} // end function ejare	

	public function geymat($code,$s_price_minGeymat,$min_geymat_price,$s_price_maxGeymat,$max_geymat_price){
		if($s_price_minGeymat == 1){
			$max = array('code'=>$code,'min_geymat'=> $min_geymat_price);
			$this->model_max_price->save_by($max,'code',$code);				
							
			$max = array('code'=>$code,'min_geymat'=> '0');
			$this->model_min_price->save_by($max,'code',$code);				
			}
		if($s_price_minGeymat == 2){		
			$min = array('code'=>$code,'min_geymat'=>$min_geymat_price);
			$this->model_min_price->save_by($min,'code',$code);				
							
			$min = array('code'=>$code,'min_geymat'=>'0');
			$this->model_max_price->save_by($min,'code',$code);
			}					
		
		if($s_price_maxGeymat == 1){
			$max = array('code'=>$code,'max_geymat'=> $max_geymat_price);
			$this->model_max_price->save_by($max,'code',$code);				
							
			$max = array('code'=>$code,'max_geymat'=> '0');
			$this->model_min_price->save_by($max,'code',$code);			
			}
		if($s_price_maxGeymat == 2){		
			$min = array('code'=>$code,'max_geymat'=>$max_geymat_price);
			$this->model_min_price->save_by($min,'code',$code);				
							
			$min = array('code'=>$code,'max_geymat'=>'0');
			$this->model_max_price->save_by($min,'code',$code);			
			}
		} // end function geymat	
		
	
			
}// end model_price