<style>
.footer{
	top:5px !important;
	}
.footer_details{
	text-align:center;
	top:10px !important;
	line-height:30px;
	}	
.login{
	border:1px solid #A48CB6;
	width:100%;
	min-height:400px;
	background:#FFF;
	}
.title{
	border-bottom:1px solid #A48CB6;
	height:30px;
	padding-right:20px;
	line-height:30px;
	background-color:#CCC;
	}

.contactForm{
	float:left;
	margin-left:20px;
	}
.contact{
	width:958px;
	margin:10px auto;
	background:#FFF;
	}
tr:nth-child(even) {
	background: #DDD;

	}
hr{
border:1px dotted #EEE;
	}												
</style>

<div class="contact">
    <div class="login">
    	<div class="title"> <strong class="t">لیست املاک</strong> </div>
        
		<table width="100%">
        	<thead style="background:#09F; height:30px; color:#FFF;">
            	<tr>
                	<th>کد</th>
                    <th>تاریخ</th>
                    <th>استان</th>
                    <th>شهر</th>
                    <th>منطقه</th>
                    <th>نوع ملک</th>
                    <th>واگذاری</th>
                    <th>سن بنا</th>
                    <th>زیر بنا</th>
                    <th>مساحت</th>
                    <th>خواب</th>
                    <th>قیمت</th>
                </tr>
            </thead>
            <?php foreach($result as $row):?>
            <?php 
			$id_ostan = $this->model_autopopulate->get_by(array('id'=>$row->id_ostan));
			foreach($id_ostan as $rowOstan){
				$ostan = $rowOstan->name;
				}
				
			$id_shahrestan = $this->model_autopopulate->get_by(array('id'=>$row->id_shahrestan));
			foreach($id_shahrestan as $rowShahrestan){
				$shahrestan = $rowShahrestan->name;
				}
				
			$id_mantage = $this->model_autopopulate->get_by(array('id'=>$row->id_mantage));
			foreach($id_mantage as $rowMantage){
				$mantage = $rowMantage->name;
				}

			$id_noeMelk = $this->model_type_home->get_by(array('id'=>$row->noe_melk));
			foreach($id_noeMelk as $rowNoeMelk){
				$noeMelk = $rowNoeMelk->title_noe_melk;
				}
			?>
            <tr style="height:20px; text-align:center">
            	<td><?php echo anchor('details/'.$row->id,$row->code_melk)?></td>
                <td><?php echo $row->save_date ?></td>
                <td><?php echo $ostan ?></td>
                <td><?php echo $shahrestan ?></td>
                <td><?php echo $mantage ?></td>
                <td><?php echo $noeMelk ?></td>
                <td><?php echo status($row->code_melk) ?></td>
                <td><?php echo $row->sen_bana?></td>
                <td><?php echo $row->zirbana?></td>
                <td><?php echo $row->masahat?></td>
                <td><?php echo $row->khab?></td>
                <td><?php echo prices($row->code_melk)?></td>
        
            </tr>
            <?php endforeach ?>
        </table>
        
 
    </div>
</div>