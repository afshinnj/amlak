<div class="navbar">
            <div class="navbar-inner">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
             
            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="<?php echo site_url('admin')?>">پرتال املاک روز</a>
             
            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse">
            
              <ul class="nav pull-right text-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    تنظیمات
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><?php echo anchor('admin/about','درباره ما');?></li>
                        <li><?php echo anchor('admin/contact','تماس با ما')?></li>
                        <li><?php echo anchor('admin/configuration','کلمات کلیدی');?></li>
                        <!--<li><?php echo anchor('admin/configuration/SiteOff','بستن سایت');?></li>-->
                        <li><?php echo anchor('admin/users',"ایجاد مدیر جدید")?></li>
                        <li class="divider"></li>
                        <li><?php echo anchor('admin/login/user_logout',"خروج <i class='icon-off'></i>")?></li>
                    </ul>
                    </li>
                </ul>
                <ul class="nav pull-right text-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    ثبت متغیر ها
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        	<li><?php echo anchor('admin/location','استان/شهر/منطقه');?></li>
                            <li><?php echo anchor('admin/detail/','جزئیات مسکن')?></li>
                            <!--<li><?php echo anchor('menu/subMenu','ایجاد زیر منو');?></li>-->
                    </ul>
                    </li>
                </ul>
                
                <ul class="nav pull-right text-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    املاک
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        	<li><?php echo anchor('admin/darkhast','املاک درخواستی');?></li>
                            <li><?php echo anchor('admin/listHome','املاک سپرده شده')?></li>
                    </ul>
                    </li>
                </ul>
              
                <ul class="nav pull-right text-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    امکانات
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><?php echo anchor('admin/backup',"پشتیبان گیری")?></li>
                        <li><?php echo anchor('banner',"بنر تبلیغاتی")?></li>
                        <li><?php echo anchor('ads',"لیست آگهی ها")?></li>
                    </ul>
                    </li>
                </ul>
            </div>
             
            
            </div>
            </div>