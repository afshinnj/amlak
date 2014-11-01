// JavaScript Document
$(document).ready(function(e) {
        //$( "input[type=submit],input[type=button]" ).button()
	$( "#tabs" ).tabs();
	$('.Btn').click(function(){
		$('.statusText').slideToggle();
	});
	
	 $('.datepicker').datepicker({
	  dateFormat: 'yy/mm/dd'
	 });
	
	$( "#tabs" ).tabs();

	$('#submit').click(function(){
		var status = $('#statusInput').val();
		$.ajax({
			 type:'GET',
			 url:base_url+"ajax/status",
			 data:{'status' : status},
			 success: function(data){
				 alert('با موفقیت ثبت شد');
				 }
			});
		})
});