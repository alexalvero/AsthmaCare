<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['doctors/add'] ='doctors/add';
$route['doctors/addAP'] ='doctors/addAP';
$route['doctors/viewAP'] ='doctors/viewAP';
$route['doctors/createAP'] ='doctors/createAP';
$route['doctors/addsched'] ='doctors/addsched';
$route['doctors/schedule'] ='doctors/schedule';
$route['doctors/update'] ='doctors/update';
$route['admins/add'] ='admins/add';
$route['admins/update'] ='admins/update';
$route['patients/accept_schedule'] = 'patients/accept_schedule';
$route['patients/update_schedule'] = 'patients/update_schedule';
$route['Patients'] = 'patients';
$route['patients/schedule'] ='patients/schedule';
$route['patients/(:any)'] = 'patients/view/$1';
$route['Doctors'] = 'doctors';
$route['doctors/(:any)'] = 'doctors/view/$1';
$route['Admins'] = 'admins';
$route['admins/(:any)'] = 'admins/view/$1';
$route['admins'] ='admins/index';
$route['patients'] = 'patients/index';
$route['doctors'] = 'doctors/index';
$route['posts'] = 'posts/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
