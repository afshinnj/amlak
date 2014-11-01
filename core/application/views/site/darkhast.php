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
	max-width:700px;
	min-width:700px;	
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
	margin:0px 0px 0px 10px;
	width:730px;
	border:1px solid #FFF;
	float:left;
	padding:0px;
	}
.master{
	margin:10px auto;
	width:955px;
	min-height:400px !important;
	background:#FFF;
	}
fieldset{
	border:1px solid #CCC;
	width:720px;
	margin-bottom:20px;
	}
legend{
	border:1px solid #CCC;
	padding:5px;
	border-radius:5px ;
	}		
.tools{
	margin-bottom:20px;
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
.active{
	background-color:#FB1A1A;
	}
.active a{
	color:#FFF;
	}												
</style>
	
<div class="master">
    <div class="login">
    	<div class="title"><strong>حساب کاربری</strong><strong class="t" style="display:none">درخواست ملک</strong></div>
		<div class='control'>
           <?php
			$class = NULL;
			 $uri = $this->uri->segment(1); 
			if($uri == 'dht'){
				$class ='active';
				}
			?>
        	<div class="row"><a href="<?php echo site_url('profile')?>">حساب کاربری</a></div>
        	<div class="row"><a href="<?php echo site_url('register_home')?>">ثبت ملک</a></div>
            <div class="row <?php echo $class;?>"><a href="<?php echo site_url('dht')?>">درخواست ملک</a></div>
            <div class="row"><a href="<?php echo site_url('adver')?>">آگهی ویژه</a></div>
            <div class="row"><a href="<?php echo site_url('change')?>">تغییر رمز عبور</a></div>
            <div class="row"><a href="<?php echo site_url('changeProfile')?>">تغییر مشخصات</a> </div>
            <div class="row"><a href="<?php echo site_url('user/profile/logout')?>">خروج</a></div>
        </div>
	
    	<div class="body">
        <div class="tools">
        	 
        </div>
        <fieldset>  	
            <div class="darkhast">
            <font color="#FF0000">
           		<strong>*</strong>
           	</font><strong>پر کردن قسمت های ستاره دار الزامیست</strong>
            <hr />
            <br />
            <?php echo form_open('dht/darkhast_save','id="form"')?>
            <input type="hidden" value="<?php echo $id;?>" name="id"/>
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
                    <select id="tests" name="ostan" class="selectbox">
                        <option value="0">استان</option>
                        <?php foreach ($tests as $key => $test): ?>
                        <option value="<?php echo $key; ?>"> <?php echo $test; ?> </option>
                        <?php endforeach; ?>
                    </select>   
                    </td>
                    <td>
                    	<select id="categories" name="category" class="selectbox">
                            <option value="0">شهرستان</option>
                        </select>
                    </td>
                    <td>
                    	<select id="contents" name="content" class="selectbox">
                            <option value="0">منطقه</option>
                        </select>
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
                        <td><input type="checkbox" name="status[]" class="rahn" value='1' /> رهن</td>
                        <td><input type="checkbox" name="status[]" calss="ejare" value='2' /> اجاره</td>
                        <td><input type="checkbox" name="status[]" class="kharid" value='3' /> خرید</td>
                        <td><input type="checkbox" name="status[]" class="pishfrosh" value='4' /> پیش فروش</td>
                        <td><input type="checkbox" name="status[]" class="moaveze" value='5' /> معاوضه</td>
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
                        <?php echo noeMelk_dropdown('noeMelk',$type,'0','class="selectbox" id="noeMelk"')?> 

                        </td>
                        <td>                    
                        <?php echo senBana_dropdown('senBana','0','class="selectbox" style="width: 90px;"')?>
						</td>
                        <td>
                        	<input type="text" name="tedadKhab" style="width:50px;"/>
                        </td>
                   </tr>
            </table>
            <hr />
            <table cellpadding="1px" border="0">
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
                    <input type="text" value="" class="inputbox" style="width: 50px; float:right; margin-left:2px;" name="minRahn">
                    <select name="minRahn_s" class="selectbox" style="width: 100px; float:right  !important; margin-left:10px;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
					 </td>
                    <td>
                   
                   <input type="text" value="" class="inputbox" style="width: 50px; float:right; margin-left:2px;" name="maxRahn">
                    <select name="maxRahn_s" class="selectbox" style="width: 100px; float:right  !important; margin-left:10px;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
                    </td>
                   	<td>
                     <input type="text" value="" class="inputbox" style="width: 50px; float:right; margin-left:2px;" name="minEjare">
                    <select name="minEjare_s" class="selectbox" style="width: 100px; float:right  !important; margin-left:10px;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
                   
					 </td>
                    <td>
                     <input type="text" value="" class="inputbox" style="width: 50px; float:right; margin-left:2px;"  name="maxEjare">
                    <select name="maxEjare_s" class="selectbox" style="width: 100px; float:left  !important; margin-left:10px;">
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
                    <input type="text" value="" class="inputbox" style="width: 50px; float:right; margin-left:10px;" name="minGeymat">
                    <select name="minGeymat_s" class="selectbox" style="width: 100px; float:left !important;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
					 </td>
                    <td>
                    <input type="text" value="" class="inputbox" style="width: 50px; float:right; margin-left:10px;" name="maxGeymat">
                    <select name="maxGeymat_s" class="selectbox" style="width: 100px;">
                        <option value="1">میلیون تومان</option>
                        <option value="2">هزار تومان</option>
                    </select>
                    </td>
                	<td>
                    
                     <?php echo metraj_dropdown('metraj','0','class="selectbox" style="width: 120px"')?>
					 </td>
                    <td>
						<input type="text" id="datepicker" name="etebar" style="width:80px;" />
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
                        <textarea name="darkhast"></textarea>
                    </td>
                </tr>
            </table>
            
            <div class="save">
            	 <input type="button" value="ذخیره" id='save' style="float:left" />
            </div>
            <?php echo form_close();?>
            </div>
        </fieldset>

        </div>



<div style="clear:both"></div>
    </div>

</div>

