<script type="text/javascript" src="<?php echo site_url('assets/site/js/darkhast.js')?>"></script>
<style>
	
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

input[type="text"], input[type="password"]{
	padding:5px;
	border-radius:5px;
	border: 1px solid #03538D;
	}
textarea{
	padding:5px;
	border-radius:5px;
	border: 1px solid #03538D;
	max-width:690px;
	min-width:690px;	
	}	
.control{
	width:200px;
	float:right;
	}	
.row{
	margin:5px 10px 5px 10px;
	border:1px solid #CCC;
	height:25px;
	line-height:30px;
	padding-right:20px;
	background-color:#DDD;
	}
.row a{
	text-decoration:none;
	}	
.body{
	margin:5px 0px 0px 5px;
	width:730px;
	border:1px solid #FFF;
	float:left;
	}
.master{
	margin:10px auto;
	width:955px;
	min-height:400px !important;
	background:#FFF;
	}
fieldset{
	border:1px solid #CCC;
	width:715px;
	margin-bottom:20px;
	}
legend{
	border:1px solid #CCC;
	padding:5px;
	}		

hr{
	border:1px dotted #CCC;
	}
.footer{
	top:5px !important;
	}
.footer_details{
	text-align:center;
	top:10px !important;
	line-height:30px;
	}												
</style>

<div class="master">
    <div class="login">
    	<div class="title"><strong>حساب کاربری</strong></div>
		<div class='control'>
        	<div class="row"><a href="<?php echo site_url('profile')?>">حساب کاربری</a></div>
        	<div class="row"><a href="<?php echo site_url('register_home')?>">ثبت ملک</a></div>
            <div class="row"><a href="<?php echo site_url('dht')?>">درخواست ملک</a></div>
            <div class="row"><a href="<?php echo site_url('adver')?>">آگهی ویژه</a></div>
            <div class="row"><a href="<?php echo site_url('change')?>">تغییر رمز عبور</a></div>
            <div class="row"><a href="<?php echo site_url('changeProfile')?>">تغییر مشخصات</a> </div>
            <div class="row"><a href="<?php echo site_url('user/profile/logout')?>">خروج</a></div>
        </div>
	
    	<div class="body">
        <fieldset>
        	<legend>ویرایش درخواست</legend>
            <div class="darkhast">
            <font color="#FF0000">
           		<strong>*</strong>
           	</font><strong>پر کردن قسمت های ستاره دار الزامیست</strong>
            <br /><br />
            <?php echo form_open('dhtEdit/save','id="form"')?>
            <input type="hidden" value="<?php echo $id;?>" name="id"/>
            <input type="hidden" value="<?php echo $hash_code;?>" name="code"/>
             <table cellpadding="10px">
            	<thead>
                	<tr>
                    	<th>استان<font color="#FF0000">
           					 		<strong>*</strong>
           						 </font>
                         </th>
                        <th> شهرستان <font color="#FF0000">
           					 		<strong>*</strong>
           						 </font>
                                 </th>
                        <th> منطقه<font color="#FF0000">
           					 		<strong>*</strong>
           						 </font></th>
                    </tr>
                </thead>
            	<tr>
                	<td>
                    <?php echo ostan_dropdown('ostan',$ostan,$id_ostan,'class="selectbox" id="tests"')?> 
                    </td>
                    <td>
                    <?php echo shahrestan_dropdown('category',$shahrestan,$id_shahrestan,'class="selectbox" id="categories"')?> 
                    </td>
                    <td>
                    <?php echo mantage_dropdown('content',$mantage,$id_mantage,'class="selectbox" id="contents"')?> 
                    </td>
                </tr>
            </table>
            <hr />
            <table>
            	  <thead>
                	<tr>
                    	<th>نوع درخواست<font color="#FF0000">
           					 		<strong>*</strong>
           						 </font>
                         </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                  <tr>
					<?php echo vazeyat_darkhast_khane($code);?>
                </tr>
            </table>
            <hr />
              <table cellpadding="10px;">
            	  <thead>
                	<tr>
                    	<th>نوع ملک<font color="#FF0000">
           					 		<strong>*</strong>
           						 </font>
                         </th>
						<th>
                        	سن بنا
                        </th>
						<th>
                        	تعداد خواب
                        </th>
                    </tr>
                </thead>
                    <tr>
                        <td>
                        <?php echo noeMelk_dropdown('noeMelk',$type,$id_noeMelk,'class="selectbox"')?> 
                        </td>
                        <td>
                         <?php echo senBana_dropdown('senBana',$sen_bana,'class="selectbox" style="width: 90px;"')?>
						</td>
                        <td>
                        	<input type="text" name="tedadKhab" style="width:50px;" value="<?php echo $tedad_khab?>"/>
                        </td>
                   </tr>
            </table>
            <hr />
            <table cellpadding="1px">
            	<thead>
                	<tr>
                    	<th>حداقل رهن</th>
                        <th>حداکثر رهن</th>
                        <th>حداقل اجاره</th>
                        <th>حداکثر اجاره</th>
                    </tr>
                </thead>
                <tr>
                	<td>
                    <input type="text" value="<?php echo $min_rahn;?>" class="inputbox" style="width: 50px; float:right; margin-left:2px;" name="minRahn">
                    <select name="minRahn_s" class="selectbox" style="width: 100px; float:right  !important; margin-left:10px;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
					 </td>
                    <td>
                   
                   <input type="text" value="<?php echo $max_rahn?>" class="inputbox" style="width: 50px; float:right; margin-left:2px;" name="maxRahn">
                    <select name="maxRahn_s" class="selectbox" style="width: 100px; float:right  !important; margin-left:10px;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
                    </td>
                   	<td>
                     <input type="text" value="<?php echo $min_ejare?>" class="inputbox" style="width: 50px; float:right; margin-left:2px;" name="minEjare">
                    <select name="minEjare_s" class="selectbox" style="width: 100px; float:right  !important; margin-left:10px;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
                   
					 </td>
                    <td>
                     <input type="text" value="<?php echo $max_ejare?>" class="inputbox" style="width: 50px; float:right; margin-left:2px;"  name="maxEjare">
                    <select name="maxEjare_s" class="selectbox" style="width: 100px; float:right  !important; margin-left:10px;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
                    </td>
                </tr>
            </table>
              <hr />
            <table cellpadding="1px">
            	<thead>
                	<tr>
                    	<th>حداقل قیمت</th>
                        <th>حداکثر قیمت</th>
                    	<th>متراژ</th>
                        <th>مدت اعتبار</th>                        
                    </tr>
                </thead>
                <tr>
                	<td>
                    <input type="text" value="<?php echo $min_geymat?>" class="inputbox" style="width: 50px; float:right; margin-left:2px;" name="minGeymat">
                    <select name="minGeymat_s" class="selectbox" style="width: 100px; float:left !important; margin-left:5px;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
					 </td>
                    <td>
                    <input type="text" value="<?php echo $max_geymat?>" class="inputbox" style="width: 50px; float:right; margin-left:2px;" name="maxGeymat">
                    <select name="maxGeymat_s" class="selectbox" style="width: 100px; margin-left:5px;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
                    </td>
                	<td>
 					<?php echo metraj_dropdown('metraj',$metraj,'class="selectbox"')?>
					 </td>
                    <td>
						<input type="text" id="datepicker" name="etebar" value="<?php echo $etebar?>"/>
                    </td>                    
                </tr>
            </table>
              <hr />
            <table>
            	<thead>
                	<tr>
                    	<th>شرح درخواست</th>
                    </tr>
                </thead>
                <tr>
                    <td>
                        <textarea name="darkhast"><?php echo $sharh_darkhast?></textarea>
                    </td>
                </tr>
            </table>
            
            <div class="save">
            	 <input type="button" value="ذخیره" style="float:left" id="save"/>
            </div>
            <?php echo form_close();?>
            </div>

        </fieldset>


        </div>
        <div style="clear:both"></div>
    </div>
            
</div>

