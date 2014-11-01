// JavaScript Document
$(document).ready(function(e) {
	
	 $('#datepicker').datepicker({
	  dateFormat: 'yy/mm/dd'
	 });
	$('#save').click(function(){

		var ostan = $('#tests').val();
		if(ostan == 0){ alert('استان را انتخاب کنید');  $('#tests').css('border','1px solid red'); exit()}
		
		var categories = $('#categories').val();
		if(categories == 0){ alert('شهرستان را انتخاب کنید');  $('#categories').css('border','1px solid red'); exit()}
		
		var contents = $('#contents').val();
		if(contents == 0){ alert('منطقه را انتخاب کنید'); $('#contents').css('border','1px solid red'); exit()}
			
		var noeMelk = $('#noeMelk').val();
		if(noeMelk == 0){ alert('نوع ملک را انتخاب کنید'); $('#address').css('border','1px solid red'); exit()}
		
		var datepicker = $('#datepicker').val();
		if(datepicker == '') { alert('تاریخ اعتبار را وارد کنید'); $('#datepicker').css('border','1px solid red'); exit()}
		
		var rahn = $('.rahn').attr('checked');
		var ejare = $('.ejare').attr('checked');
		var kharid = $('.kharid').attr('checked');
		var pishfrosh = $('.pishfrosh').attr('checked');
		var moaveze = $('.moaveze').attr('checked');
		
		
		if(rahn == undefined && ejare == undefined && kharid == undefined && pishfrosh == undefined && moaveze == undefined){
			alert('نوع درخواست را انتخاب کنید'); exit()
			}
		if(ostan !=0 & categories !=0 & contents !=0 & noeMelk !=0 & datepicker != ''){
 		   $('#form').submit();
			$('#save').attr('disabled','disabled');
			$('#save').val('در حال ذخیره اطلاعات...');			
			}

		})
	
});