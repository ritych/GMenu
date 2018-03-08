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
/******************/
Route::get('/admin/page', 'PageController@allpages');
Route::get('/admin/page/create', 'PageController@createpage');
Route::post('/admin/page/create/submit', 'PageController@createmenu_submit');
Route::get('/admin/page/edit/{id}', 'PageController@editpage');
Route::post('/admin/page/edit/submit', 'PageController@editmenu_submit');
Route::get('/admin/page/delete/{id}', 'PageController@deletepage');
/****************/
Route::get('/admin/menus', 'MenuController@allmenus');
Route::get('/admin/menu/create', 'MenuController@createmenu');
Route::post('/admin/menu/create/submit', 'MenuController@createmenu_submit');
Route::get('/admin/menu/edit/{id}', 'MenuController@editmenu');
Route::post('/admin/menu/edit/submit', 'MenuController@editmenu_submit');
Route::get('/admin/menu/delete/{id}', 'MenuController@deletemenu');
/****************/
Route::get('/admin/options', 'OptionController@alloptions');
Route::get('/admin/option/create', 'OptionController@createoptions');
Route::post('/admin/option/create/submit', 'OptionController@createoptions_submit');
Route::get('/admin/option/edit/{id}', 'OptionController@editoptions');
Route::post('/admin/option/edit/submit', 'OptionController@editoptions_submit');
Route::get('/admin/option/delete/{id}', 'OptionController@deleteoptions');
/****************/
Route::get('/admin/attributes', 'AttributeController@allattributes');
Route::get('/admin/attribute/create', 'AttributeController@createattributes');
Route::post('/admin/attribute/create/submit', 'AttributeController@createattributes_submit');
Route::get('/admin/attribute/edit/{id}', 'AttributeController@editattributes');
Route::post('/admin/attribute/edit/submit', 'AttributeController@editattributes_submit');
Route::get('/admin/attribute/delete/{id}', 'AttributeController@deleteattributes');
/****************/
Route::get('/admin/categories', 'CategoryController@allcategories');
Route::get('/admin/category/create', 'CategoryController@createcategory');
Route::post('/admin/category/create/submit', 'CategoryController@createcategory_submit');
Route::get('/admin/category/edit/{id}', 'CategoryController@editcategory');
Route::post('/admin/category/edit/submit', 'CategoryController@editcategory_submit');
Route::get('/admin/category/delete/{id}', 'CategoryController@deletecategory');

//$router->resource('post', 'CategoryController');
Auth::routes();