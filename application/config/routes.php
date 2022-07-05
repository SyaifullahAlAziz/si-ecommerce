<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'Produk';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Public User
	$route['produk']['GET'] 					= 'produk'; // Produk page
	$route['toko']['GET'] 						= 'toko'; // Toko page
	$route['search']['GET'] 					= 'search'; // Search page

// Authenticated User		

	// Pages		
	$route['user']['GET']  						= 'user/home/index'; // Home page [admin, pelapak, member]
	$route['user/home']['GET']  				= 'user/home/index'; // Home page [admin, pelapak, member]
	$route['user/login']['GET']   				= 'user/login/index'; // Login page [public]
	$route['user/register']['GET']   			= 'user/login/register'; // Register page [public]

	$route['user/my']['GET']					= ''; // User detail page [admin, pelapak, member]
	$route['user/detail/{id}']['GET']			= ''; // User detail page [admin]

	$route['user/list']['GET']					= ''; // Userlist page [admin]
	$route['user/add']['GET']					= ''; // User adding form page [admin]
	$route['user/edit']['GET']					= ''; // User editing form page [admin]
	$route['user/delete']['GET']				= ''; // User deleting get request [admin]

	$route['user/store/all']['GET']				= ''; // All user's store list page [admin]
	$route['user/report/all']['GET']			= ''; // All report page [admin]

	$route['user/store']['GET']					= ''; // User's store list page [pelapak]
	$route['user/store/add']['GET']				= ''; // Form for adding new store [pelapak]
	$route['user/store/edit/{id}']['GET']		= ''; // Form for adding new store [pelapak]
	$route['user/store/delete/{id}']['GET']		= ''; // Store deleting get request [pelapak]

	$route['user/produk']['GET']				= ''; // User's produk list page [pelapak]
	$route['user/produk/add']['GET']			= ''; // Form for adding new produk [pelapak]
	$route['user/produk/edit/{id}']['GET']		= ''; // Form for editing a produk [pelapak]
	$route['user/produk/delete/{id}']['GET']	= ''; // Produk deleting get request [pelapak]
	
	$route['user/pesanan']['GET']				= ''; // List pesanan [pelapak, member]
	
	$route['user/delivery']['GET']				= ''; // List pesanan [kurir]

	
	// Request Handler
	$route['user/aksilogin']['POST']	= 'user/login/aksiLogin'; // Login check page
	$route['user/logout']['GET']   		= 'user/login/aksiLogout'; // Register page
