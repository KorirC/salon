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
//gallery
$route['gallery']='forms/gallery';
$route['forms/gallery']='forms/gallery';

//services
$route['forms/services']='forms/services';

//routes for admin checking stylists
// $route['forms/updatestylist']='checkstylists/updatedata';
$route['updatestylist/(:any)']='checkstylists/updatedata/$1';
$route['delete_stylist/(:any)']='checkstylists/delete_stylist/$1';
$route['admin_stylists']='checkstylists/index';
$route['admin']='admin';

//routes for admin checking bookings
$route['admin_bookings']='checkbookings/index';
$route['filter_by_date']='checkbookings/filter_by_date';
//feedback page
$route['feedback']='feedback_controller/enter_feedback';
// personal details
$route['myappointments']='checkappointments/index';
$route['inwait']='checkappointments/show_service_inwait';
$route['cancel/(:any)']='checkappointments/cancel/$1';
//reports
$route['report']='report_controller/index';
$route['report_bookings']='report_controller/show_bookings';
$route['report_feedback']='report_controller/show_feedback';
$route['report_earnings']='report_controller/show_earnings';
$route['reportearnings']='report_controller/earnings_day';
$route['singlestylist_report/(:any)']='report_controller/single_stylist/$1';

// routes for stylist
$route['addstylist']='stylist/index';

// hairproducts page
$route['products']='hairproducts_controller/index';

//service page
$route['service']='service_controller/index';

//gallery page
$route['gallery']='gallery_controller/index';
// routes for booking
$route['book']='booking';
$route['makebook']='booking/book_service';
$route['accept/(:any)/(:any)']='checkbookings/accept_booking/$1/$2';
$route['income/(:any)/(:any)']='checkbookings/insert_earning/$1/$2';
$route['reject/(:any)']='checkbookings/reject_booking/$1';

//routes for login
$route['auth_client']='client/auth_user';
$route['login']='client/login';
$route['logout']='client/logout';
$route['home']='pages/view';

$route['upload_image']='checkbookings/add_service';
$route['forms/register']='forms/register';
// $route['forms/(:any)']='forms/view/$1';
$route['forms']='forms/index';
$route['default_controller'] = 'pages/view';
// $route['(:any)']='pages/view/$1';
$route['404_override'] = '';

// new routes
$route['register']='client/register_client';
$route['translate_uri_dashes'] = FALSE;
// earning routes
$route['earnings']='earning';
//hairproducts earnigs
$route['hairproducts_income']='products';
$route['hairproducts']='checkbookings/insert_product';

//admin registry
$route['admin_register']='adminreg_controller/register_client';
$route['forms/admregister']='forms/admregister';

$route['update_stylist/(:any)']='stylist/stylist_update/$1';
//feedback
$route['admin_feedback']='checkfeedback/index';
$route['read/(:any)']='checkfeedback/read_message/$1';
