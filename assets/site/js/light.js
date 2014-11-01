$(document).ready(function() {
	
    var light = $(".t").html() ;
	   
	switch(light){
		case "تماس با ما":
		$(".li7 a").css({"color":"red" , "background-color":"#F3EDF4"});
		break;
		
		case "نقشه ها":
		$(".li6 a").css({"color":"red" , "background-color":"#F3EDF4"});
		break;
		
		case "سفارش تبلیغات":
		$(".li5 a").css({"color":"red" , "background-color":"#F3EDF4"});
		break;
	
		
		case "درخواست ملک":
		$(".li4 a").css({"color":"red" , "background-color":"#F3EDF4"});
		break;
		
		case "سپردن ملک":
		$(".li3 a").css({"color":"red" , "background-color":"#F3EDF4"});
		break;
		
		case "لیست املاک":
		$(".li2 a").css({"color":"red" , "background-color":"#F3EDF4"});
		break;
		}
			
			$(document).ready(function(){
				$( "#tabs" ).tabs();		
				$('#slider').nivoSlider();
				
				$('ul.tabs').each(function(){
					
					var $active, $content, $links = $(this).find('a');

					
					$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
					$active.addClass('active');
					$content = $($active.attr('href'));

					
					$links.not($active).each(function () {
						$($(this).attr('href')).hide();
					});

					
					$(this).on('click', 'a', function(e){
						
						$active.removeClass('active');
						$content.hide();

						
						$active = $(this);
						$content = $($(this).attr('href'));

						
						$active.addClass('active');
						$content.show();

						
						e.preventDefault();
					});
				});
				
				
		 $("#search1").hide();
			$("#status").val('1');
			
			
				var a = $("input[name='money_min']").attr("placeholder");
				var b =$("input[name='money_max']").attr("placeholder");
				
			$("input[name='money_min']").focus(function(){$(this).attr("placeholder","");});
			
			$("input[name='money_max']").focus(function(){$(this).attr("placeholder","");});
			
			$("input[name='money_min']").blur(function(){$(this).attr("placeholder",a);});
				
			$("input[name='money_max']").blur(function(){$(this).attr("placeholder",b);});
			
			$("li.1").click(function(){
				
				$(this).find("div").attr("class","sbox_arrow");
				$("li.2").find("div").attr("class","1");
				$("#search").show();
				$("#search1").hide();
				$("#status").val('1');
				$("input[name='money_min']").val('');
				$("input[name='money_max']").val('');
				$("input[name='money_min']").attr("placeholder"," قیمت کل حداقل (تومان)");
				$("input[name='money_max']").attr("placeholder","قیمت کل حداکثر (تومان)");
				var a = $("input[name='money_min']").attr("placeholder");
				var b =$("input[name='money_max']").attr("placeholder");
			$("input[name='money_min']").focus(function(){$(this).attr("placeholder","");});
			
			$("input[name='money_max']").focus(function(){$(this).attr("placeholder","");});
			
			$("input[name='money_min']").blur(function(){$(this).attr("placeholder",a);});
				
			$("input[name='money_max']").blur(function(){$(this).attr("placeholder",b);});
				});
				
			$("li.2").click(function(){
				
				$(this).find("div").attr("class","sbox_arrow");
				$("li.1").find("div").attr("class","1");
				$("#search").hide();
				$("#search1").show();
				$("#status").val('2');
				$("input[name='money_min']").val('');
				$("input[name='money_max']").val('');
				$("input[name='money_min']").attr("placeholder","قیمت رهن حداکثر (تومان)");
				$("input[name='money_max']").attr("placeholder","قیمت اجاره حداکثر (تومان)");
				var c = $("input[name='money_min']").attr("placeholder");
				var d =$("input[name='money_max']").attr("placeholder");	
			    $("input[name='money_min']").focus(function(){$(this).attr("placeholder","");});	
			    $("input[name='money_max']").focus(function(){$(this).attr("placeholder","");});
			    $("input[name='money_min']").blur(function(){$(this).attr("placeholder",c);});
			    $("input[name='money_max']").blur(function(){$(this).attr("placeholder",d);});
				
				
				});
			});
			
			
	
});