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

Route::get('/', function () {
    return view('home');
});

Route::get('auth/login', function(){
	return view('auth.login');
});

Route::get('auth/logout', function(){
	return 'Logout de usuario';
});

Route::get('catalog', function(){
	return view('catalog.index');
});

Route::get('catalog/show/{id}', function($id){
	return view('catalog.show')
		->with('id', $id);
});

Route::get('catalog/create', function(){
	return view('catalog.create');
});

Route::get('catalog/edit/{id}', function($id){
	return view('catalog.edit', array('id' => $id));
});
