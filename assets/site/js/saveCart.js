// JavaScript Document

$(document).ready(function(e) {
	
	
	$('#bank').click(function(){
		$('#cartbcart').slideUp(function(){
			$('#formPardakht').slideDown();
			});
		
		});
	$('#cart').click(function(){
		 $('#formPardakht').slideUp(function(){
			$('#cartbcart').slideDown();
			});
		
		})	
	$('#datepicker').datepicker({
	     dateFormat: 'yy/mm/dd'
	 });
	
	$('#saveCart').click(function(){
	var TrackingNumber = $('#TrackingNumber').val(); 
	if(TrackingNumber == 0){alert('شماره پرداخت را وارد کنید.'); $('#TrackingNumber').css('border','1px solid red'); exit();}
	
	var PayerName = $('#PayerName').val();
	if(PayerName == 0){alert('نام پرداخت کننده را وارد کنید.'); $('#PayerName').css('border','1px solid red'); exit();}
	
	var datepicker = $('#datepicker').val();
	if(datepicker == 0){alert('تاریخ پرداخت را وارد کنید.'); $('#datepicker').css('border','1px solid red'); exit();}
	
	var Theamountpaid = $('#Theamountpaid').val();
	if(Theamountpaid == 0){alert('مبلغ پرداخت را وارد کنید.'); $('#Theamountpaid').css('border','1px solid red'); exit();}
	
	if(TrackingNumber !=0 & PayerName !=0 & datepicker !=0 & Theamountpaid !=0 ){
			
			$('#form').submit();
			$('#saveCart').attr('disabled','disabled');
			$('#saveCart').val('در حال ذخیره اطلاعات...');
	}		
		
		
		})

	
	
});