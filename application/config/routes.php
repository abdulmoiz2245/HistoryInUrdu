<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
///////////////////////////
/////    DashBoard   //////
///////////////////////////
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/sign_in'] = 'admin/signin';

///////////////////////////
///////    Posts     //////
///////////////////////////
$route['admin/post'] = 'admin/posts';
$route['admin/add-post'] = 'admin/add_post';
$route['admin/save-post'] = 'admin/save_post';
$route['admin/list-post'] = 'admin/list_post';


///////////////////////////
///////   Categorie  //////
///////////////////////////
$route['admin/categorie'] = 'admin/categorrie';
$route['admin/save-categorie'] = 'admin/save_categorie';


///////////////////////////
///////    Books    ///////
///////////////////////////
$route['admin/book'] = 'admin/books';
$route['admin/add-book'] = 'admin/add_book';
$route['admin/save-book'] = 'admin/save_book';
$route['admin/list-book'] = 'admin/list_book';

///////////////////////////
///////    Maps     //////
///////////////////////////
$route['admin/map'] = 'admin/maps';
$route['admin/add-map'] = 'admin/add_map';
$route['admin/save-map'] = 'admin/save_map';
$route['admin/list-map'] = 'admin/list_map';

///////////////////////////
//////    Setting    //////
///////////////////////////
$route['admin/setting'] = 'admin/setting';
$route['admin/setting-save/(:num)'] = 'admin/setting_update/$1';
$route['admin/setting-changePassword/(:num)'] = 'admin/setting_changePassword/$1';
$route['admin/setting-socialLinks/(:num)'] = 'admin/setting_socialLinks/$1';



//////////////////////////////////////////////////////////////////////
/////////////////////////    Front End    ////////////////////////////
//////////////////////////////////////////////////////////////////////


///////////////////////////
//////    Categorie  //////
///////////////////////////

$route['categorie/(.*)'] ='main/view_categorie/$1/$2/$3';
$route['book/categorie/(.*)'] ='main/view_book_categorie/$1/$2/$3';
$route['maps'] = 'main/view_all_map';

///////////////////////////
//////    Posts    ////////
///////////////////////////

$route['posts/(:any)'] ='main/view_posts/$1';
$route['post/post_comment/(:num)'] =  'main/post_comment/$1';


///////////////////////////
//////    Books    ////////
///////////////////////////

$route['book/(:any)'] ='main/view_book/$1';
$route['book/book_comment/(:num)'] =  'main/book_comment/$1';

///////////////////////////
//////    Maps    ////////
///////////////////////////

$route['map/(:any)'] ='main/view_posts/$1';
$route['map/map_comment/(:num)'] =  'main/post_comment/$1';