<?php
class model_home_vam extends MY_Model
{
	protected $_table_name = 'home_vam';
	protected $_order_by = 'id';
	

	public function save_vam($code){
		
		 $max_vam = '0';
		 $min_vam = '0';
		 $max_price_vam = '0';
		 $min_price_vam = '0';
		 
		 $vahed_pool_vam = $this->input->post('vam_select',TRUE);
			if($vahed_pool_vam == 1){
				$max_vam = $this->input->post('vam',TRUE);
				}
				
			if($vahed_pool_vam == 2){
				$min_vam = $this->input->post('vam',TRUE);
				}	
				
				
		 $vahed_pool_agsat_vam = $this->input->post('agsat_vam_select',TRUE);
			if($vahed_pool_agsat_vam == 1){
				$max_price_vam = $this->input->post('agsatVam',TRUE);
				}
			if($vahed_pool_agsat_vam == 2){
				$min_price_vam = $this->input->post('agsatVam',TRUE);
				}
		
		$data = array('code' => $code,
						'max_vam' => $max_vam,
						'min_vam' => $min_vam,
						'max_price_vam' => $max_price_vam,
						'min_price_vam' => $min_price_vam,
						'tap' => $this->input->post('tap_v',TRUE),
						'tab' => $this->input->post('tab_v',TRUE)
					);
		$this->model_home_vam->save($data);			
		
		}

}