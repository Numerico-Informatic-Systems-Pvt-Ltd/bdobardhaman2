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

$route['test'] = "test";
$route['admin'] = "admin";
$route['admin/page/create'] = "admin/page_create";
$route['admin/page/edit/(:any)'] = "admin/page_edit/$1";
$route['admin/page/delete/(:any)'] = "admin/page_delete/$1";
$route['admin/menu/create'] = "admin/menu_create";
$route['admin/menu/edit/(:any)'] = "admin/menu_edit/$1";
$route['admin/menu/delete/(:any)'] = "admin/menu_delete/$1";
$route['admin/sidemenu/create'] = "admin/sidemenu_create";
$route['admin/sidemenu/edit/(:any)'] = "admin/sidemenu_edit/$1";
$route['admin/sidemenu/delete/(:any)'] = "admin/sidemenu_delete/$1";
$route['admin/bottommenu/create'] = "admin/bottommenu_create";
$route['admin/bottommenu/edit/(:any)'] = "admin/bottommenu_edit/$1";
$route['admin/bottommenu/delete/(:any)'] = "admin/bottommenu_delete/$1";
$route['admin/videos/create'] = "admin/videos_create";
$route['admin/videos/edit/(:any)'] = "admin/videos_edit/$1";
$route['admin/videos/delete/(:any)'] = "admin/videos_delete/$1";
$route['admin/bulletins/create'] = "admin/bulletin_create";
$route['admin/bulletins/edit/(:any)'] = "admin/bulletin_edit/$1";
$route['admin/bulletins/delete/(:any)'] = "admin/bulletin_delete/$1";
$route['admin/news/create'] = "admin/news_create";
$route['admin/news/edit/(:any)/(:any)'] = "admin/news_edit/$1/$2";
$route['admin/news/delete/(:any)'] = "admin/news_delete/$1";
$route['admin/notification/create'] = "admin/notification_create";
$route['admin/notification/edit/(:any)'] = "admin/notification_edit/$1";
$route['admin/notification/delete/(:any)'] = "admin/notification_delete/$1";
$route['admin/staffdirectory/create'] = "admin/staffdirectory_create";
$route['admin/staffdirectory/edit/(:any)'] = "admin/staffdirectory_edit/$1";
$route['admin/staffdirectory/delete/(:any)'] = "admin/staffdirectory_delete/$1";
$route['admin/contactus/create'] = "admin/contactus_create";
$route['admin/contactus/edit/(:any)'] = "admin/contactus_edit/$1";
$route['admin/contactus/delete/(:any)'] = "admin/contactus_delete/$1";
$route['admin/gallery/create'] = "admin/create_gallery";
$route['admin/gallerynames/create'] = "admin/create_gallery_names";
$route['admin/gallerynames/edit/(:any)'] = "admin/edit_gallety_names/$1";
$route['admin/gallerynames/delete/(:any)'] = "admin/delete_gallety_names/$1";
$route['admin/leftimage/edit/1'] = "admin/edit_leftimage1";
$route['admin/leftimage/edit/2'] = "admin/edit_leftimage2";
$route['admin/farzina'] = "admin/farzina_test";
$route['admin/logout'] = "admin/admin_logout";
$route['gallery/(:any)'] = "webpage/show_image/$1";
$route['(:any)']="webpage/page/$1";
$route['default_controller'] = "webpage";
$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
