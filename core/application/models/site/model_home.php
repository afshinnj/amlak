<?php
class Model_home extends MY_Model
{
	protected $_table_name = 'home';
	protected $_order_by = 'id';


	public function upload($name,$codeMelk){
		
		// Specify configuration for File 1
		  $config['upload_path'] = './images/home';
		  $config['allowed_types'] = 'gif|jpg|png';
		  $config['max_size'] = '1000000';

		  // Initialize config for File 1
		  $this->upload->initialize($config);

		  // Upload file 1
		if ($this->upload->do_upload($name))
			{
			  $data = $this->upload->data();
			  $avatar = $data['file_name'];
			  $config['image_library'] = 'gd2';
			  $config['source_image'] = './images/home/'.$avatar;
			  $config['width'] = 400;
			  $config['height'] = 267;
			  $this->image_lib->initialize($config);
			  $this->image_lib->resize();	
			  $this->image_lib->clear();		  
			  $this->model_home_image->save(array('id_home'=>$codeMelk,'name'=>$avatar));
			}
		  
		  

		}

		
		/*
		*اضافه کردن امکانات خانه 
		*/
	public function insert_emkanat($codeMelk){
		
			$this->db->where('id_khane',$codeMelk);
			$this->db->delete('emkanat_khane');
				
			$emkanat = $this->input->post('emkanat',TRUE);
			if($emkanat){
				foreach($emkanat as $row){
					$data = array('id_khane'=>$codeMelk,'emkanat'=>$row);
					$this->db->insert('emkanat_khane',$data);
					}
				}
		}// end function insert_emkanat
		
		
		
					
	/*
	* اضافه کردن وضعیت ملک : رهن - اجاره - فروش - پیش فروش 
	*/
	
	public function status($codeMelk){
		
			$this->model_home_status->delete_by(array('code'=>$codeMelk));

			$status = $this->input->post('status');
			if($status){
				foreach($status as $row){
					$data = array('code'=>$codeMelk,'status_id'=>$row);
					$this->model_home_status->save($data);
					}
			}
		}/* end function status */
	
	
	public function save_home($codeMelk, $date){ 
	
		$data = array('id_user'=>$this->session->userdata('id'),
				    'id_ostan'=>$this->input->post('ostan',TRUE),
					'id_shahrestan'=>$this->input->post('shahrestan',TRUE),
					'id_mantage'=>$this->input->post('mantage',TRUE),
					'address'=>$this->input->post('address',TRUE),
					'noe_melk' => $this->input->post('noeMelk',TRUE),
					
					'mogheyat'=> $this->input->post('mogheyat',TRUE),
					
					'masahat'=> $this->input->post('masahat',TRUE),// مساحت

					'zirbana'=> $this->input->post('zirbana',TRUE),// زیربنا
					
					'tool_bar'=> $this->input->post('tool_bar',TRUE),// طول بر
					
					'eslahi'=> $this->input->post('eslahi',TRUE),// اصلاحی
					
					't_metraj'=> $this->input->post('t_metraj',TRUE),//متراژ
					
					'tarakom'=> $this->input->post('tarakom',TRUE),// طول بر
					
					'karbari'=> $this->input->post('karbari',TRUE),// کاربری
					
					'mabar'=> $this->input->post('mabar',TRUE),// معبر
					
					'sanad'=> $this->input->post('sanad',TRUE),// سند
					
					'mojavez'=> $this->input->post('mojavez',TRUE),// مجوز
					
					'nama'=> $this->input->post('nama',TRUE),// نما
					
					'sokoonat'=> $this->input->post('sokoonat',TRUE),// سکونت
					
					'emtiyaz'=> $this->input->post('emtiyaz1',TRUE).','.
					$this->input->post('emtiyaz2',TRUE).','.
					$this->input->post('emtiyaz3',TRUE).','.
					$this->input->post('emtiyaz4',TRUE),// امتیاز
					
					'tabagheh' => $this->input->post('tabagheh',TRUE),//طبقه
					'sen_bana' => $this->input->post('sen_bana',TRUE),//سن بنا
					
					'vahedha' => $this->input->post('vahedha',TRUE),//تعداد واحد
					
					'tabaghat' => $this->input->post('tabaghat',TRUE),//تعداد طبقه
					
					'khab' => $this->input->post('khab',TRUE),//تعداد خواب
					
					'teras' => $this->input->post('teras',TRUE),//متراژ تراس
					
					'kafpoosh' => $this->input->post('kafpoosh',TRUE),//کفپوش
					
					'telefon' => $this->input->post('telefon',TRUE),//تلفن
					
					'service_ashpazkhaneh' =>  $this->input->post('service_ashpazkhaneh',TRUE),//سرویس آشپزخانه
					
					'service_behdashti' =>  $this->input->post('service_behdashti',TRUE),//سرویس بهداشتی
						
					'tozihat' => $this->input->post('tozihat',TRUE), //توضیحات
								
					'save_date' => $date,
					
					'code_melk' => $codeMelk,
					
					'active' =>'0',
					
					'etbar' =>$this->input->post('etebar',TRUE)
					);
					
					$this->model_home->save($data);
		
			      
		
		}// end save
	
	public function price($codeMelk){
		
		$s_price_minGeymat = $this->input->post('mp_v',TRUE);
		if(!$s_price_minGeymat){ $s_price_minGeymat = 1; }
		$min_geymat_price = $this->input->post('gheyamt_mm',TRUE);
		
		$s_price_maxGeymat = $this->input->post('kp_v',TRUE);
		if(!$s_price_maxGeymat){ $s_price_maxGeymat = 1; }
		$max_geymat_price = $this->input->post('gheymat_kol',TRUE);
		
		$this->model_price->geymat($codeMelk,$s_price_minGeymat,$min_geymat_price,$s_price_maxGeymat,$max_geymat_price);
		
		
		$s_price_minRahn = $this->input->post('rp_v',TRUE);
		if(!$s_price_minRahn){ $s_price_minRahn = 1; }
			
			
		$min_rahn_price = $this->input->post('rahn',TRUE);
		$this->model_price->rahn($codeMelk, $s_price_minRahn, $min_rahn_price, NULL, NULL);
		
		
		 $s_price_minEjare = $this->input->post('ep_v',TRUE);
		 if(!$s_price_minEjare){ $s_price_minEjare = 1; }
		 $min_ejare_price = $this->input->post('ejareh',TRUE);
		 $this->model_price->ejare($codeMelk, $s_price_minEjare,$min_ejare_price, NULL, NULL);
		


		}// end price
		


		
}//end model 