<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware'=>'auth', 'as'=>'admin.'], function(){

	Route::get('categories', ['as'=>'categories.index','uses'=>'CategoriesController@index']);
	Route::get('categories/create', ['as'=>'categories.create','uses'=>'CategoriesController@create']);
	Route::post('categories/store', ['as'=>'categories.store','uses'=>'CategoriesController@store']);
	Route::get('categories/edit/{id}', ['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
	Route::post('categories/update/{id}', ['as'=>'categories.update','uses'=>'CategoriesController@update']);
	
	Route::get('products', ['as'=>'products.index','uses'=>'ProductsController@index']);
	Route::get('products/create', ['as'=>'products.create','uses'=>'ProductsController@create']);
	Route::post('products/store', ['as'=>'products.store','uses'=>'ProductsController@store']);
	Route::get('products/edit/{id}', ['as'=>'products.edit','uses'=>'ProductsController@edit']);
	Route::post('products/update/{id}', ['as'=>'products.update','uses'=>'ProductsController@update']);
	Route::get('products/destry/{id}', ['as'=>'products.destroy','uses'=>'ProductsController@destroy']);
	
});

Auth::routes();

Route::get('/home', ['as'=>'home','uses'=>'HomeController@index']);

Route::post('/send', ['as'=>'send','uses'=>'ContactController@sendEmail']);
