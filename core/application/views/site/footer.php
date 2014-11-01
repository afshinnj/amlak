

<link  href="<?php echo site_url('assets/site/style/absolution.css')?>" type="text/css" rel="stylesheet"/>
<script src="<?php echo site_url('assets/site/js/jquery-1.6.21.min.js')?>" language="javascript" > </script>
<script src="<?php echo site_url('assets/admin/js/jquery-ui-1.9.0.custom.js')?>" language="javascript"></script>
<script type="text/javascript" src="<?php echo site_url('assets/site/js/amlakrooz.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/site/js/light.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/site/js/easing.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/site/js/jcarousellite_1.js')?>" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo site_url('assets/site/js/02.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/site/js/jquery.autoPopulateBox.js')?>"></script>
<script language="javascript"  src="<?php echo site_url('assets/site/js/price.js')?>" ></script>

<script src="<?php echo site_url('assets/site/js/jquery.ui.datepicker-cc.all.min.js')?>"></script>
<script>
	jQuery(function($) {
		$('#tests').autoPopulateBox({
			emptyLabel: '(انتخاب)',
			url: '<?php echo site_url("site/json/")?>',
			allSeparator: '/',
			change: 'category',
			
			category: {
				target: '#categories',
				change: 'content'
			},
			content: {
				target: '#contents'
			}
		});
	});

</script>
<div class="footer">
<div class="circle_lb"> </div>
<div class="circle_rb"></div>
    <div class="footerbox">
    
    <ul id="footermenu">
        <li><a href="<?php echo site_url('site');?>">صفحه اصلی</a></li> 
        <li><a href="<?php echo site_url('site/contactus');?>">درباره ما</a></li>      
        <li><a href="<?php echo site_url('register_home');?>">سپردن ملک</a></li>
        <li><a href="<?php echo site_url('dht');?>">درخواست ملک</a></li>        
        <li><a href="">نقشه </a></li>
        <li><a href="<?php echo site_url('adver');?>">سفارش تبلیغات</a></li>
       

    </ul>
    
    </div><!--footerbox-->

</div><!--footer-->

<div class="footer_details">

<div class="copyright_colright">
                <div style="color:red">
                    سایت املاک روز هیچگونه مسئولیتی در مورد درستی یا نادرستی اطلاعات
                    املاک ثبت شده ندارد.
                    <br>
                </div>
                &copy;1392 کلیه حقوق برای وب سایت املاک روز محفوظ است.
            </div>

</div><!--footer_details-->


</body>
</html>