<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

//Route::get('auth/login', function(){
//	return view('auth.login');
//});

Route::get('auth/logout', function(){
	return 'Logout de usuario';
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('catalog', 'CatalogController@getIndex');
	Route::get('catalog/show/{id}', 'CatalogController@getShow');
	Route::get('catalog/create', 'CatalogController@getCreate');
	Route::get('catalog/edit/{id}', 'CatalogController@getEdit');
	Route::get('/home', 'HomeController@index');
	Route::post('catalog/create','CatalogController@postCreate');
	Route::put('catalog/edit/{id}','CatalogController@putEdit');
});

Route::auth();
