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
	
	border:1px solid #CCC;
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
	margin:5px 0px 10px 10px;
	width:720px;
	border:1px solid #CCC;
	float:left;
	padding:10px;
	
	}
.mastermain{
	
	height:400px !important;
	}	
.footer{
	top:15px !important;
	display:none;
	}
.footer_details{
	text-align:center;
	display:none;
	line-height:30px;
	display:none;
	}
tr:nth-child(even) {
	background: #DDD;

	}
.active{
	background-color:#FB1A1A;
	}
.active a{
	color:#FFF;
	}											
</style>
<div class="mastermain">
    <div class="login">
    	<div class="title"><strong>حساب کاربری</strong></div>
		<div class='control'>
        	<?php
			$class = NULL;
			 $uri = $this->uri->segment(1); 
			if($uri == 'profile'){
				$class ='active';
				}
			?>
        	<div class="row <?php echo $class;?>"><a href="<?php echo site_url('profile')?>">حساب کاربری</a></div>
        	<div class="row"><a href="<?php echo site_url('register_home')?>">ثبت ملک</a></div>
            <div class="row"><a href="<?php echo site_url('dht')?>">درخواست ملک</a></div>
            <div class="row"><a href="<?php echo site_url('adver')?>">آگهی ویژه</a></div>
            <div class="row"><a href="<?php echo site_url('change')?>">تغییر رمز عبور</a></div>
            <div class="row"><a href="<?php echo site_url('changeProfile')?>">تغییر مشخصات</a> </div>
            <div class="row"><a href="<?php echo site_url('logout')?>">خروج</a></div>
        </div>
	
    	<div class="body">
            <h4>خواهشمند است به هنگام ثبت ملک به نکات زیر توجه نمایید تا ملک شما مورد تایید قرار گیرد.</h4>
            <ol>
                <li>از ثبت ملک تکراری خودداری کنید.</li>
                <li>از درج عکس تکراری و یا عکس متعلق به ملک دیگران خودداری نمایید.</li>
                <li>از درج عکس شخصی افراد و یا عکس های غیر مرتبط با ملک خوداری کنید.</li>
                <li>املاک ثبت شده شما حداکثر ظرف 24 ساعت در سایت نمایش داده میشود و نیاز به ثبت مجدد نیست.</li>
            </ol>
            <h4>لطفا قبل از خروج از سایت برای امنیت بیشتر از منوی شخصی خود روی 'خروج 'کلیک کنید.</h4>
            <h4>از اینکه این وب سایت را برای معرفی املاک خود انتخاب کرده اید. متشکریم.</h4>
            
            <div>
            <hr />
            
            <div id="tabs" >
              <ul>
              <li style="float:right"><a href="#tabs-1">لیست املاک ثبت شده</a></li>
              <li style="float:right"><a href="#tabs-2">لیست املاک درخواستی</a></li>
              <li style="float:right"><a href="#tabs-3">لیست آگهی های ویژه</a></li>
              </ul>
              <div id="tabs-1" >
                  <table width="100%" cellpadding="5px">
                      <thead align="center" bgcolor="#006FC1" >
                          <tr style="color:#FFF">
                              <th>تاریخ ثبت</th>
                              <th>کد</th>
                              <th>وضعیت</th>
                              <th>ویرایش</th>
                              <th>حذف</th>
                          </tr>
                      </thead>
                      <?php foreach($get_home as $row):?>
                      <?php $expire_Date = $this->nikdate->date("Y/m/d",NULL,FALSE); ?>
                      <?php $page = 'edit';?>
                      <tr align="center">
                          <td><?php echo $row->save_date?></td>
                          <td><?php echo $row->code_melk?></td>
                          <?php if($row->active == 0 AND $row->etbar <= $expire_Date):?>
                          <td><font color="#FF0000">پایان تاریخ اعتبار</font></td>
                          <?php $page = 'expire'?>
                          <?php elseif($row->active == 0):?>
                          <td><font color="#FF0000">غیر فعال</font></td>
                          <?php else:?>
                          <td>فعال</td>
                          <?php endif ?>
                          <td><?php echo anchor('register_home/'.$page.'/'.$row->id.'','<img src="'.site_url('assets/site/img/edit.png').'"/>');?></td>
                          <td><?php echo anchor('register_home/delete/'.$row->id.'','<img src="'.site_url('assets/site/img/delete.png').'"/>');?></td>
                      </tr>
                      <?php endforeach ?>
                  </table>
              </div>
              
              <div id="tabs-2">
	 			<table dir="rtl" cellpadding="5px" >
	            	<thead bgcolor="#006FC1" align="center">
	                	<tr style="color:#FFF">
	                        <th width="400">تاریخ درخواست</th>
                            <th width="100" align="center">وضعیت</th>
	                        <th width="100" align="center">ویرایش</th>
	                        <th width="100" align="center">حذف</th>
	                    </tr>
	                </thead>
	                <?php foreach($homes as $row):?>
	                <tr >
	                    <td style="border-bottom:1px solid #CCC;" align="center"><?php echo $row->save_date;?></td>
                        <?php if($row->active == 0):?>
                        	<td><font color="#FF0000">غیر فعال</font></td>
                        <?php else:?>
                        	<td>فعال</td>
                        <?php endif?>
	                    <td align="center" style="border-bottom:1px solid #CCC;">
						   <?php echo anchor('dhtEdit/'.$row->id.'','<img src="'.site_url('assets/site/img/edit.png').'"width="16" height="16" />');?>
	                    </td>
	                    <td align="center" style="border-bottom:1px solid #CCC;">
						   <?php echo anchor('dht/delete/'.$row->id.'','<img src="'.site_url('assets/site/img/delete.png').'"width="16" height="16" />');?>
	                     </td>
	                </tr>
	                <?php endforeach?>
	            </table>
              </div>
              
              <div id="tabs-3">
				  <table width="100%" cellpadding="5px">
                      <thead align="center" bgcolor="#006FC1" >
                          <tr style="color:#FFF">
                              <th>کد</th>
                              <th>وضعیت</th>
                              <th>تمدید</th>
                              <th>حذف</th>
                          </tr>
                      </thead>
                      <?php $expire_Date = $this->nikdate->date("Ymd",NULL,FALSE); ?>
                      <?php $page = 'tamdid';?>
                      <?php foreach($get_ads as $row):?>
                      <tr align="center">
                          <td><?php echo $row->code_melk?></td>
                          <?php ?>
                          <?php if($row->active == 1):?>
                          <td><?php echo "فعال"?></td>
                          	<?php else: ?>
                          <td><font color="#FF0000"><?php echo "غیر فعال"?></font></td>
                          	<?php endif?>
                          <td><?php if($row->active == 0 AND $row->save_date <= $expire_Date):?>
                         		 <?php echo anchor('advertisement/tamdid/'.$row->id.'','<font color="#FF0000">تمدید کنید</font>');?>
                              <?php else:?>
                              		<?php
									  $dey =  $this->nikdate->date('d',NULL,FALSE);
									  $date = $this->nikdate->date("m",NULL,FALSE);
									  $pdate1 = substr($date, -4,2) * 30 + $dey;
									  $saveDate = $row->save_date;
									  $saveDey = substr($saveDate, -2,2);
									  $pdate2 = substr($saveDate, -4,2) * 30 + $saveDey;
									  echo $pdate2 - $pdate1;
									 ?>
                              		روز تا پایان اعتبار 
                              <?php endif?>
                          </td> 
                          <td><?php echo anchor('advertisement/delete/'.$row->id.'',
						  						'<img src="'.site_url('assets/site/img/delete.png').'"/>'
												);?></td>
                      </tr>
                      <?php endforeach ?>
                  </table>
             </div> 
              
             </div>

            
            </div>
        </div>

		
<?php  anchor($uri, 'حذف', array(
		'onclick' => "return confirm('این رکورد بعد از حذف قابل برگشت نیست . آیا از حذف مطمئن هستید.?');"
	));?>
<div style="clear:both"></div>
    </div>

</div>


