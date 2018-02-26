<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@front');

Route::group(['middleware' => 'web'], function () {
    Route::post('/register', 'Auth\RegisterController@register');
    Route::post('/login', 'Auth\LoginController@login');
	Route::post('/create_user', 'Auth\RegisterController@register');
	
    Route::get('/logout', 'Auth\LoginController@logout');
});

Route::get('/catalog', 'CatalogController@catalogs');
Route::get('/catalog/{id}', 'CatalogController@catalog');
/****************/
Route::get('/product/{id}', 'ProductController@product_view');
Route::get('/admin/product', 'AdminController@allproducts');
Route::get('/admin/product/edit/{id}', 'ProductController@product_edit');
Route::get('/admin/product/delete/{id}', 'ProductController@product_delete');
Route::get('/admin/product/add', 'ProductController@product_add');
/****************/
Route::get('/admin', 'AdminController@index');
Route::get('/admin/content', 'AdminController@content');
Route::get('/admin/page', 'AdminController@allpages');
Route::get('/admin/page/create', 'PageController@createpage');
Route::get('/admin/page/edit/{id}', 'PageController@editpage');
Route::get('/admin/page/delete/{id}', 'PageController@deletepage');
/****************/
Route::get('/admin/menus', 'AdminController@allmenus');
Route::get('/admin/menu/create', 'AdminController@createmenu');
Route::post('/admin/menu/create/submit', 'AdminController@createmenu_submit');
Route::get('/admin/menu/edit/{id}', 'AdminController@editmenu');
Route::post('/admin/menu/edit/submit', 'AdminController@editmenu_submit');
Route::get('/admin/menu/delete/{id}', 'AdminController@deletemenu');
/****************/
Route::get('/admin/options', 'AdminController@alloptions');
Route::get('/admin/option/create', 'AdminController@createoptions');
Route::post('/admin/option/create/submit', 'AdminController@createoptions_submit');
Route::get('/admin/option/edit/{id}', 'AdminController@editoptions');
Route::post('/admin/option/edit/submit', 'AdminController@editoptions_submit');
Route::get('/admin/option/delete/{id}', 'AdminController@deleteoptions');
/****************/
Route::get('/admin/attributes', 'AdminController@allattributes');
Route::get('/admin/attribute/create', 'AdminController@createattributes');
Route::post('/admin/attribute/create/submit', 'AdminController@createattributes_submit');
Route::get('/admin/attribute/edit/{id}', 'AdminController@editattributes');
Route::post('/admin/attribute/edit/submit', 'AdminController@editattributes_submit');
Route::get('/admin/attribute/delete/{id}', 'AdminController@deleteattributes');



Auth::routes();