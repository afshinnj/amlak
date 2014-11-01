<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "site";
$route['404_override'] = '';
$route['index'] = 'site';
$route['admin'] = 'admin/admin';
$route['login'] = 'admin/login';
$route['about'] = 'admin/about';
$route['contact'] = 'admin/contact';
$route['fileManager'] = 'admin/fileManager';
$route['users'] = 'admin/users';
$route['backup'] = 'admin/backup';
$route['configuration'] = 'admin/configuration';
$route['location'] = 'admin/location';
$route['detail'] = 'admin/detail';
$route['siteUser'] = 'admin/siteUser';
$route['darkhast'] = 'admin/darkhast';
$route['dhtEdit/(:num)'] = 'dhtEdit';
$route['ads'] = 'admin/advertisement';
$route['user_delete/(:num)'] = 'admin/siteUser/delete';

$route['contactus'] = 'site/contactus'; 
$route['logout'] = 'user/profile/logout';
$route['check_user'] = 'user/login/check_user';
$route['detail/(:num)'] = 'detail';
$route['details/(:num)'] = 'details';
$route['ads/(:num)'] = 'ads';
$route['user_login'] = 'user/login';
$route['user_register'] = 'user/register';
$route['profile'] = 'user/profile';
$route['change'] = 'user/profile/change';
$route['changeProfile'] = 'user/profile/changeProfile';
$route['advertisement'] = 'advertisement';
$route['advertisement/(:num)'] = 'advertisement';
$route['adver'] = 'advertisement/adver';
$route['homes/(:num)'] = 'site/home_list';
$route['pardakht'] = 'advertisement/pardakht';
$route['payment/(:num)/(:num)'] = 'advertisement/payment';
$route['success'] = 'user/register/success';
$route['list/(:num)'] = 'site/lists';
$route['list/(:num)/(:num)'] = 'site/lists';

$route['banner'] = 'admin/banner';

/* End of file routes.php */
/* Location: ./application/config/routes.php */