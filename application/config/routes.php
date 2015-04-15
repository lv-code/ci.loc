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

$route['default_controller'] = "welcome";
$route['404_override'] = '';

//add by zg 2015-04-13
$route['list-brand(:num)-onecate(:num)'] = "list/index/$1/$2/";
//$route['list-brand(:num)-onecate(:num)'] = "route_test/index/?brand=$1&onecate=$2";
//$route['list-brand(:num)-onecate(:num)'] = "route_test/index/$1/$2";
$route['list-brand(:num)-1cate(:num)-2cate(:num)-3cate(:num)-attr(:num)-factor(:num)-search(:any)-page(:num)-sort(:num).html']
   = "route_test/index/$1/$2/$3/$4/$5/$6/$7/$8/$9";
$route['list-brand(:num)-category(:num)-attr(:num)-factor(:num)-search(:any)-page(:num)-sort(:num).html']
   = "goods_list/index/$1/$2/$3/$4/$5/$6/$7";
//详细页
$route['detail-(:num).html'] = "route_test/detail/$1";


/* End of file routes.php */
/* Location: ./application/config/routes.php */
