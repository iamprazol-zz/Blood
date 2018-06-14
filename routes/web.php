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

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'auth'] , function () {

	Route::get('request/{id}', [
		'uses' => 'RequestController@show',
		'as' => 'request'
	]);

	Route::get('groups', [
		'uses' => 'GroupsController@index',
		'as' => 'groups.index'
	]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/request','RequestController@show')->name('request');

Auth::routes();

Route::get('/request','RequestController@show')->name('request');



Auth::routes();

Route::get('/request/create.blade','RequestController@create')->name('request/create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
