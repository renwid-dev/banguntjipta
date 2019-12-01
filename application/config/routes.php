<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['administrator']='admin/login';
$route['artikel']='blog';
$route['artikel']='blog/index';
$route['artikel/(:any)']='blog/detail/$1';
$route['404_override'] = 'PageNotFound';
$route['translate_uri_dashes'] = FALSE;
