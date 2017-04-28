<?php

//Route::get('/', 'HomeController@index');
//Route::get('/about', 'AboutController@about');
//Route::get('products', 'ProductsController@products');
//Route::get('wholesale', 'WholesaleController@wholesale');
//Route::post('wholesale/create', 'WholesaleController@create');

//+++++++++Home+++++++++++//

Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@index'
	]);

//+++++++++About+++++++++++//

Route::get('about', [
	'as' => 'about',
	'uses' => 'AboutController@about'
	]);

//+++++++++Products+++++++++++//

Route::get('products', [
	'as' => 'products',
	'uses' => 'ProductsController@products'
	]);

//+++++++++Wholesale+++++++++++//

Route::get('wholesale', [
	'as' => 'wholesale',
	'uses' => 'WholesaleController@wholesale'
	]);

Route::post('wholesale/create', [
	'as' => 'wholesale.create',
	'uses' => 'WholesaleController@create'
	]);

//+++++++++Contact+++++++++++//

Route::get('contact', [
	'as' => 'contact',
	'uses' => 'ContactController@contact'
	]);

Route::post('contact/create', [
	'as'=> 'contact.create',
	'uses'=>'ContactController@create'
	]);

//+++++++++AuthRoutes+++++++++++//
Route::auth();

Route::get('dashboard', 'AuthController@dashboard');

Route::post('dashboard/post', [
	'as' => 'type.post',
	'uses' => 'AuthController@newProduct'
	]);