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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/forum' , [
	'uses' => 'ForumsController@index' ,
	'as' => 'forum.index'
]);

Route::get('/forum/show/{id}' , [
	'uses' => 'ForumsController@show' ,
	'as' => 'forum.show'
]);

Route::get('/who' , [
	'uses' => 'ForumsController@who' ,
	'as' => 'forum.who'
]);



Route::group(['middleware' => 'auth'] , function () {

	Route::get('request/edit/{id}' , [
		'uses' => 'RequestController@edit' ,
		'as' => 'request.edit'
	]);

	Route::post('request/update/{id}' , [
		'uses' => 'RequestController@update' ,
		'as' => 'request.update'
	]);

	Route::post('request/store' , [
		'uses' => 'RequestController@store' ,
		'as' => 'request.store'
	]);

	Route::get('request/create', [
		'uses' => 'RequestController@create',
		'as' => 'request.create'
	]);

	Route::get('groups', [
		'uses' => 'GroupsController@index',
		'as' => 'groups.index'
	]);

	Route::get('request/available/{id}' , [
		'uses' => 'RequestController@available' ,
		'as' => 'request.available'
	]);

	Route::get('request/unavailable/{id}' , [
		'uses' => 'RequestController@unavailable' ,
		'as' => 'request.unavailable'
	]);
});

