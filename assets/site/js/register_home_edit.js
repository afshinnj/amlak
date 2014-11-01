// JavaScript Document
function changeV(i){
	switch(i.value){
		case "1":
			$('#rahn').attr('disabled', !i.checked);
			$('#rahn_v').attr('disabled', !i.checked);
			
		break
		case "2":
			$('#ejareh').attr('disabled', !i.checked);
			$('#ejareh_v').attr('disabled', !i.checked);
			
		break
		case "6":
			$('#gheymat_kol').attr('disabled', !i.checked);
			$('#gheymat_kol_v').attr('disabled', !i.checked);
			$('#gheyamt_mm').attr('disabled', !i.checked);
			$('#gheyamt_mm_v').attr('disabled', !i.checked);
			
		break
		case "4":
			$('#gheymat_kol').attr('disabled', !i.checked);
			$('#gheymat_kol_v').attr('disabled', !i.checked);
			$('#gheyamt_mm').attr('disabled', !i.checked);
			$('#gheyamt_mm_v').attr('disabled', !i.checked);
			
		break
		case "5":
			$('#gheymat_kol').attr('disabled', !i.checked);
			$('#gheymat_kol_v').attr('disabled', !i.checked);
			$('#gheyamt_mm').attr('disabled', !i.checked);
			$('#gheyamt_mm_v').attr('disabled', !i.checked);
			
		break
	}
}

$(document).ready(function(e) {
	
	var a=$('input[value=1]:checked').val();
	var b=$('input[value=2]:checked').val();
	var c=$('input[value=6]:checked').val();
	var d=$('input[value=4]:checked').val();
	var e=$('input[value=5]:checked').val();


    if (a=="1"){
        $('#rahn').removeAttr('disabled');
        $('#rahn_v').removeAttr('disabled');
       
        }
     if (b=="2"){
        $('#ejareh').removeAttr('disabled');
            $('#ejareh_v').removeAttr('disabled');
       
        }
       
     if (c=="6"){
        $('#gheymat_kol').removeAttr('disabled');
            $('#gheymat_kol_v').removeAttr('disabled');
            $('#gheyamt_mm').removeAttr('disabled');
            $('#gheyamt_mm_v').removeAttr('disabled');
       
        }
     if (d=="4"){
        $('#gheymat_kol').removeAttr('disabled');
            $('#gheymat_kol_v').removeAttr('disabled');
            $('#gheyamt_mm').removeAttr('disabled');
            $('#gheyamt_mm_v').removeAttr('disabled');
       
        }
       
     if (e=="5"){
        $('#gheymat_kol').removeAttr('disabled');
            $('#gheymat_kol_v').removeAttr('disabled');
            $('#gheyamt_mm').removeAttr('disabled');
            $('#gheyamt_mm_v').removeAttr('disabled');
       
        }     
	
	
	
	
	
	 $('#datepicker').datepicker({
	  dateFormat: 'yy/mm/dd'
	 });
	 
	 
		$('.f').bind('change', function() {
			
		   if(this.files[0].type != "image/png" && this.files[0].type != "image/jpeg"  && this.files[0].type !=  "image/gif" ){
				alert("فایل شما غیر مجاز میباشد");
				$(this).val('');	
				}	
					
			if(this.files[0].size>204800){
			  alert("فایل شما غیر مجاز میباشد");
			  $(this).val('');
			  }
		  

		});
	 
	$('#saveHome').click(function(){

		
		var ostan = $('#tests').val();
		if(ostan == 0){ alert('استان را انتخاب کنید');  $('#tests').css('border','1px solid red'); exit();}
		
		var categories = $('#categories').val();
		if(categories == 0){ alert('شهرستان را انتخاب کنید');  $('#categories').css('border','1px solid red'); exit();}
		
		var contents = $('#contents').val();
		if(contents == 0){ alert('منطقه را انتخاب کنید');  $('#contents').css('border','1px solid red'); exit();}
			
	
		var address = $('#address').val();
		if(address == 0){ alert('آدرس ملک را وارد کنید');  $('#address').css('border','1px solid red'); exit();}
		
		var datepicker = $('#datepicker').val();
		if(datepicker == '') { alert('تاریخ اعتبار را وارد کنید'); $('#datepicker').css('border','1px solid red') }
		
		var noeMelk = $('#noeMelk').val();
		if(noeMelk == 0){ alert('نوع ملک را انتخاب کنید'); $('#noeMelk').css('border','1px solid red'); exit()}
		
		var rahn = $('.rahn').attr('checked');
		var ejare = $('.ejare').attr('checked');
		var frosh = $('.frosh').attr('checked');
		var pishfrosh = $('.pishfrosh').attr('checked');
		var moaveze = $('.moaveze').attr('checked');
		
			
		if(rahn == undefined && ejare == undefined && frosh == undefined && pishfrosh == undefined && moaveze == undefined){
			alert('نوع واگذاری را انتخاب کنید'); exit()
			}
			
		if(ostan !=0 & categories !=0 & contents !=0 & address !=0 & datepicker != ''){
			
			$('#form').submit();
			$('.parde').show();
			$('#saveHome').attr('disabled','disabled');
			$('#saveHome').val('در حال ذخیره اطلاعات...');
			
			}
		
		})
	
});