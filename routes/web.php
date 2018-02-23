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

Route::get('/product/{id}', 'ProductController@product_view');
Route::get('/admin/product/edit/{id}', 'ProductController@product_edit');
Route::get('/admin/product/delete/{id}', 'ProductController@product_delete');
Route::get('/admin/product/add', 'ProductController@product_add');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/content', 'AdminController@content');
Route::get('/admin/page', 'AdminController@allpages');
Route::get('/admin/page/create', 'PageController@createpage');
Route::get('/admin/page/{id}/edit', 'PageController@editpage');
Route::get('/admin/page/{id}/delete', 'PageController@deletepage');

Route::get('/admin/menu', 'AdminController@index');
Route::get('/admin/menu/create', 'MenuController@index');
Route::get('/admin/menu/{id}/edit', 'MenuController@index');
Route::get('/admin/menu/{id}/delete', 'MenuController@index');



Auth::routes();