<div class="mastermain">

<div class="searchbox">
<div class="circle_lt"></div>        
<div class="circle_rb"></div>  
<div class="circle_rt"></div>

<ul class='tabs'>
   <!-- <li class="active 1"><a href='#tab1'></a>
    <div class="1"></div>
    </li>-->
    <li class="active 1"><a href='#'>خرید ملک</a>
   <div class="sbox_arrow"></div>
    </li>
    <li class="active 2"><a href='#'>رهن و اجاره ملک</a>
   <div class=""></div>
    </li>
  </ul>
  <script>
	  $(document).ready(function(e) {
		
		
		$('#search').click(function(){
			var ostan = $('#tests').val();
			
			if(ostan == 0){ alert('استان را انتخاب کنید'); exit()}
			
			var categories = $('#categories').val();
			if(categories == 0){ alert('شهرستان را انتخاب کنید'); exit()}
			
			var contents = $('#contents').val();
			if(contents == 0){ alert('منطقه را انتخاب کنید'); exit()}	
			
			var noeMelk = $('#noeMelk').val();
			if(noeMelk == 0){ alert('نوع ملک را مشخص کنید'); exit()}
			
			if(ostan !=0 & categories !=0 & contents !=0 & noeMelk !=0){
			
				$('#kharid').submit();
				
			}
			})
			
			$('#search1').click(function(){
			var ostan = $('#tests').val();
			
			if(ostan == 0){ alert('استان را انتخاب کنید'); exit()}
			
			var categories = $('#categories').val();
			if(categories == 0){ alert('شهرستان را انتخاب کنید'); exit()}
			
			var contents = $('#contents').val();
			if(contents == 0){ alert('منطقه را انتخاب کنید'); exit()}	
			
			var noeMelk = $('#noeMelk').val();
			if(noeMelk == 0){ alert('نوع ملک را مشخص کنید'); exit()}
			
			if(ostan !=0 & categories !=0 & contents !=0 & noeMelk !=0){
			
				$('#kharid').submit();
				
			}
			})
			

	});

  </script>
  <div class="mohtava" id="tab2">
  <br />
  <?php echo form_open('search','id="kharid"')?>
  <input type="hidden" name="status" value="" id="status" />
    <select id="tests" name="ostan" class="selectbox">
		<option value="0">استان</option>
		<?php foreach ($tests as $key => $test): ?>
		<option value="<?php echo $key; ?>"> <?php echo $test; ?> </option>
		<?php endforeach; ?>
	</select>
    
    
	<select id="categories" name="category" class="selectbox">
		<option value="0">شهرستان</option>
	</select>
    
	<select id="contents" name="content" class="selectbox">
		<option value="0">منطقه</option>
	</select>
    
    <br /><br />
    
      <select class="selectbox" id="noeMelk" name="noeMelk">
     <option value="0" selected="selected">نوع ملک</option>
        <?php foreach($type as $row):?>
         <option value="<?php echo $row->id; ?>"> <?php echo $row->title_noe_melk; ?> </option>
        <?php endforeach ?>
    </select>
    
     <select class="selectbox" name="metraj">
        <option value="">متراژ</option>
        <option value="">همه موارد</option>
        <option value="100">تا 100 متر</option>
        <option value="150">100 تا 150 متر</option>
        <option value="200">150 تا 200 متر</option>
        <option value="250">200 تا 250 متر</option>
        <option value="251">250 متر به بالا</option>
     </select>
     
     <br /><br /><br />
     
  <input class="inputbox" onkeyup="format(this)" name="money_min"  placeholder="قیمت کل حداقل (تومان)">
  
  <input class="inputbox" onkeyup="format(this)" name="money_max"  placeholder="قیمت کل حداکثر (تومان)">
 <div class="btn_col">
 <img  id='search'  src="<?php echo site_url('assets/site/img/srch_btn3.png')?>" name="btn1" class="btnactive" alt="جستجوی خرید ملک"  />
 <img id='search1' src="<?php echo site_url('assets/site/img/srch_btn3.png')?>" name="btn2" class="btndeactive" alt="جستجوی رهن اجاره"  />
 </div>
  </div> <!--bax mohtava-->
  
 
<?php echo form_close();?>
</div> <!--search box-->


<!--shoroe tabligate bozorgh-->
<div id="page">

<div class="circle_rt"> </div>
<div class="circle_lb"> </div>

  
   <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
               <?php echo slide();?>
            </div>
        </div>
   </div>
			
     
       
      
  
   
</div><!--page box (tablighe bozorgh)-->
        
<!--<div class="banertwo"></div> banertwo-->   
<div class="box_body">
<div class="up next_02">&nbsp;</div>
<div class="down previous_02">&nbsp;</div>



<div class="content anyClass_02">
<ul>
<!--شروع اولین تبلیغ-->
	<?php echo scroll();?>
    
<!--پایان اولین تبلیغ-->
</ul>
</div>

</div>  <!--box body (tablighe keshoi)-->      

<div class="akharinha">
<div class="yellow_box_title">جدیدترین املاک فروش یا اجاره </div> 


<div class="tab-content">

<div  class="new_app_col_right">
    
    
            <div  class="new_app_title">  ملک برای فروش</div>
        
				<?php echo home_kharid()?>
        
</div><!--new_app_col_right-->

<div  class="new_app_col_left">
    
            <div  class="new_app_title">  ملک برای رهن و اجاره </div>
            <?php echo home_ejare()?>
        	
			
        
</div><!--new_app_col_left-->


<div class="new_app_footer" >
<div style="color:#000; margin-right:180px;float:right"><?php echo anchor('list/1','سایر موارد');?></div>
<div style="color:#000; margin-left:18px; float:left"><?php echo anchor('list/2','سایر موارد');?></div>
</div>
 
                   
                </div><!--tab-content-->
                
<div class="yellow_box_title">جدیدترین تقاضاهای خرید یا اجاره </div>
<div class="tab-content">

<div  class="new_app_col_right">
    
    
            <div  class="new_app_title">  ملک برای خرید</div>
        	<?php echo darkhast_kharid();?>
            

        
</div><!--new_app_col_right-->

<div  class="new_app_col_left">
    
            <div  class="new_app_title">  ملک برای رهن و اجاره </div>
            
			<?php echo darkhast_ejare();?>
        
</div><!--new_app_col_left-->


<div class="new_app_footer">
<div style="color:#000; margin-right:180px;float:right"><?php echo anchor('list/3','سایر موارد');?></div>
<div style="color:#000; margin-left:18px; float:left"><?php echo anchor('list/4','سایر موارد');?></div>
</div>
 
                   
                </div>

</div><!--box akharin ha-->

</div><!--mastermain-->

