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
$route['default_controller'] = 'Controller_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Routes Login
$route['login'] = 'Controller_login/act_login';

// home login
$route['home_login'] = 'Controller_login';

// Routes Home Beranda
$route['beranda'] = 'Controller_beranda';

//Logout 
$route['logout'] = 'Controller_logout';

//Admin_akun
$route['admin_akun'] = 'Controller_akun_admin';
$route['add_akun'] = 'Controller_akun_admin/tambah_akun';
$route['delete_akun'] = 'Controller_akun_admin/delete_akun';
$route['edit_akun'] = 'Controller_akun_admin/edit_akun';

//Admin Lomba

$route['admin_lomba'] = 'Controller_lomba_admin';
$route['add_lomba'] = 'Controller_lomba_admin/tambah_lomba';
$route['delete_lomba'] = 'Controller_lomba_admin/delete_lomba';
$route['edit_lomba'] = 'Controller_lomba_admin/edit_lomba';

//Admin tpq

$route['admin_tpq'] = 'Controller_tpq_admin';
$route['add_tpq'] = 'Controller_tpq_admin/tambah_tpq';
$route['delete_tpq'] = 'Controller_tpq_admin/delete_tpq';
$route['edit_tpq'] = 'Controller_tpq_admin/edit_tpq';

//Admin peserta

$route['admin_peserta'] = 'Controller_peserta_admin';
$route['add_peserta'] = 'Controller_peserta_admin/tambah_peserta';
$route['delete_peserta'] = 'Controller_peserta_admin/delete_peserta';
$route['edit_peserta'] = 'Controller_peserta_admin/edit_peserta';
$route['edit_status'] = 'Controller_peserta_admin/edit_status';
$route['edit_status_user'] = 'Controller_peserta_admin/edit_status_user';

// Pendaftaran

$route['pendaftaran_user'] = 'Controller_peserta_admin/pendaftaran_user';
$route['delete_pendaftaran'] = 'Controller_peserta_admin/delete_pendaftaran';
$route['edit_pendaftaran'] = 'Controller_peserta_admin/edit_pendaftaran';
// Refresh
$route['peserta_refresh'] = 'Controller_peserta_admin/peserta_refresh';
$route['akun_refresh'] = 'Controller_akun_admin/refresh_akun';
$route['lomba_refresh'] = 'Controller_lomba_admin/refresh_lomba';
$route['tpq_refresh'] = 'Controller_tpq_admin/refresh_tpq';
$route['peserta_modal_refresh'] = 'Controller_peserta_admin/refresh_modal_peserta';


//Admin peserta Lomba

$route['admin_peserta_lomba'] = 'Controller_peserta_lomba';

// Daftar Peserta lomba

$route['daftar_peserta_lomba'] = 'Controller_daftar_peserta_lomba';
