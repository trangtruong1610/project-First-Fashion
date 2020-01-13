<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';

$route['contact'] = 'contact/index';
$route['login'] = 'login_page/index';
$route['login/(:any)'] = 'login_page/login/$str';

$route['product'] = 'product/get_all';
$route['product/brand'] = 'product/brand';
$route['product/(:num)'] = 'product/get_by_id/$1';

$route['product/fashion'] = 'product/fashion';
$route['product/children'] = 'product/children';
$route['product/accessories'] = 'product/accessories';


$route['product/add_compare'] = 'product/add_compare';
$route['product/compare'] = 'product/compare';
$route['product/delete'] = 'product/delete_compare';

$route['dashboard'] = 'dashboard/index';
$route['dashboard/add'] = 'form/add';
$route['dashboard/member'] = 'form/member';
$route['dashboard/category'] = 'form/category';
$route['dashboard/trending'] = 'trending_controller/trending_add';

$route['dashboard/edit/(:num)'] = 'form_update/get_by_id/$1';
$route['dashboard/preview/(:num)'] = 'form_update/edit_by_id/$1';
$route['dashboard/delete/(:num)'] = 'form/delete/$1';
$route['dashboard/file/(:num)'] = 'product/export_file/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
