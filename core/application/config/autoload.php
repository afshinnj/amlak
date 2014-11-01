<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| This file specifies which systems should be loaded by default.
|
| In order to keep the framework as light-weight as possible only the
| absolute minimal resources are loaded by default. For example,
| the database is not connected to automatically since no assumption
| is made regarding whether you intend to use it.  This file lets
| you globally define which systems you would like loaded with every
| request.
|
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you can load automatically:
|
| 1. Packages
| 2. Libraries
| 3. Helper files
| 4. Custom config files
| 5. Language files
| 6. Models
|
*/

/*
| -------------------------------------------------------------------
|  Auto-load Packges
| -------------------------------------------------------------------
| Prototype:
|
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/

$autoload['packages'] = array();


/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
| These are the classes located in the system/libraries folder
| or in your application/libraries folder.
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'session', 'xmlrpc');
*/

$autoload['libraries'] = array(
 								'database',
								'session',
								'email',
								'form_validation',
								'nikcms',
								'nikdate',
								'pagination',
								'mellat','upload','image_lib','sms','pagination');
								


/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/

$autoload['helper'] = array('url','file','form','security','language',
							'captcha','download','blog','banner','scroll','slide','search','list_home','home','page');
							
/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| NOTE: This item is intended for use ONLY if you have created custom
| config files.  Otherwise, leave it blank.
|
*/

$autoload['config'] = array();


/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as array('codeigniter');
|
*/

$autoload['language'] = array();


/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['model'] = array('model1', 'model2');
|
*/

$autoload['model'] = array('application/model_file_manager',
						   'application/model_contact',
						   'application/model_web_config',
						   'application/model_about',
						   'application/model_send_email',
						   'application/model_password_reset',
						   'application/model_users',
						   'application/model_ip_banned',
						   'application/model_ostan',
						   'application/model_shahrestan',
						   'application/model_mantage',
						   'application/model_type_home',
						   'application/model_karbary',
						   'application/model_sanad',
						   'application/model_nama',
						   'application/model_kafpoosh',
						   'application/model_autopopulate',
						   'application/model_banner',
						   'application/model_kabinet',
						   'site/model_status',
						   'site/model_home_status',
						   'site/model_site_user',
						   'site/model_site_user_register',
						   'site/model_home',
						   'site/model_darkhast',
						   'site/model_populate',
						   'site/model_cart',
						   'site/model_advertisement',
						   'site/model_max_price',
						   'site/model_min_price',
						   'site/model_price',
						   'site/model_home_vam',
						   'site/model_home_image',
						   'site/model_expire'
						   );


/* End of file autoload.php */
/* Location: ./appBase/config/autoload.php */