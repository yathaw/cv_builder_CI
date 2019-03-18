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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Login
$route['default_controller'] = 'Login_ctrl/index';
$route['login'] = 'Login_ctrl/login';
$route['logout'] = 'Login_ctrl/logout';


// Register
$route['register'] = 'Register_ctrl/index';
$route['registered'] = 'Register_ctrl/register';

// Home
$route['home'] = 'Home_ctrl/index';

// Work
$route['work'] = 'Work_ctrl/create';
$route['work/add'] = 'Work_ctrl/add';
$route['work/edit/:num'] = 'Work_ctrl/edit';
$route['work/update'] = 'Work_ctrl/update';

// Skill
$route['skill'] = 'Skill_ctrl/create';
$route['skill/add'] = 'Skill_ctrl/add';
$route['skill/edit/:num'] = 'Skill_ctrl/edit';
$route['skill/update'] = 'Skill_ctrl/update';


// Language
$route['language'] = 'Language_ctrl/create';
$route['language/add'] = 'Language_ctrl/add';
$route['language/edit/:num'] = 'Language_ctrl/edit';
$route['language/update'] = 'Language_ctrl/update';


// Education
$route['education'] = 'Education_ctrl/create';
$route['education/add'] = 'Education_ctrl/add';
$route['education/edit/:num'] = 'Education_ctrl/edit';
$route['education/update'] = 'Education_ctrl/update';

// Project
$route['project'] = 'Project_ctrl/create';
$route['project/add'] = 'Project_ctrl/add';
$route['project/edit/:num'] = 'Project_ctrl/edit';
$route['project/update'] = 'Project_ctrl/update';

// Profile
$route['profile/edit'] = 'Profile_ctrl/edit';
$route['profile/update'] = 'Profile_ctrl/update';
$route['profile/changepassword'] = 'Profile_ctrl/changepassword_form';
$route['profile/changeprocess'] = 'Profile_ctrl/changepassword';
