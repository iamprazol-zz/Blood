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


Route::get('/admin/register' , [
    'uses' => 'AdminController@create_admin' ,
    'as' => 'admin.register'
]);

Route::post('/admin/storeadmin' , [
    'uses' => 'AdminController@store_admin' ,
    'as' => 'admin.store'
]);

Route::post('contact/store' , [
	'uses' => 'ContactController@store' ,
	'as' => 'contact.store'
]);

Route::get('/who' , [
	'uses' => 'ForumsController@who' ,
	'as' => 'forum.who'
]);

Route::get('/forum/request/show/{id}' ,[
	'uses' => 'RequestController@show' ,
	'as' => 'request.show'
	]);

Route::get('/camps/show' , [
	'uses' => 'AdminController@show' ,
	'as' => 'camps.show'
]);





Route::group(['middleware' => 'auth'] , function () {

	Route::get('/forum/myrequest/{id}' , [
		'uses' => 'ForumsController@myrequest' ,
		'as' => 'forum.myrequest'
	]);


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

	Route::get('groups/search', [
		'uses' => 'GroupsController@search',
		'as' => 'groups.search'
	]);

	Route::get('groups/donor', [
		'uses' => 'GroupsController@donor',
		'as' => 'groups.donor'
	]);

	Route::get('request/available/{id}' , [
		'uses' => 'RequestController@available' ,
		'as' => 'request.available'
	]);

	Route::get('request/unavailable/{id}' , [
		'uses' => 'RequestController@unavailable' ,
		'as' => 'request.unavailable'
	]);


	Route::get('/profile/index',[
		'uses' => 'ProfileController@index' ,
		'as' => 'profile.index'
	]);

	Route::get('/profile/pic',[
		'uses' => 'ProfileController@pic',
		'as' => 'profile.pic'
	]);
	Route::post('/profile/upload',[
		'uses' => 'ProfileController@upload',
		'as' => 'profile.upload'
	]);

	Route::post('/profile/update',[
		'uses' => 'ProfileController@update',
		'as' => 'profile.update'
	]);


	Route::get('/profile/editProfile', [
		'uses' => 'ProfileController@editProfile',
		'as' => 'profile.edit'
		]);

	Route::get('/admin' , [
		'uses' => 'AdminController@index' ,
		'as' => 'admin.index'
	]);

	Route::get('/admin/user/view/{id}' , [
		'uses' => 'AdminController@user_view' ,
		'as' => 'admin.userview'
	]);


	Route::get('/admin/verify/index' , [
		'uses' => 'AdminController@verify_index' ,
		'as' => 'admin.verifyindex'
	]);

    Route::get('/admin/verify/admin' , [
        'uses' => 'AdminController@verify_admin' ,
        'as' => 'admin.verifyadmin'
    ]);



    Route::get('/admin/verified/{id}' , [
		'uses' => 'AdminController@verified' ,
		'as' => 'admin.verified'
	]);


	Route::get('/admin/display' , [
		'uses' => 'AdminController@display' ,
		'as' => 'admin.display'
	]);


	Route::get('/admin/make/{id}' , [
		'uses' => 'AdminController@make_admin' ,
		'as' => 'admin.make'
	]);

	Route::get('/admin/remove/{id}' , [
		'uses' => 'AdminController@remove_admin' ,
		'as' => 'admin.remove'
	]);


	Route::get('/admin/contact' , [
		'uses' => 'ContactController@contact' ,
		'as' => 'admin.contact'
	]);



	Route::get('/camps/create' , [
		'uses' => 'AdminController@create' ,
		'as' => 'camps.create'
	]);

	Route::get('camps/edit/{id}' , [
		'uses' => 'AdminController@edit' ,
		'as' => 'camps.edit'
	]);

	Route::post('camps/update/{id}' , [
		'uses' => 'AdminController@update' ,
		'as' => 'camps.update'
	]);

	Route::delete('camps/destroy/{id}' , [
		'uses' => 'AdminController@destroy' ,
		'as' => 'camps.destroy'
	]);

	Route::post('/camps/store' , [
		'uses' => 'AdminController@store' ,
		'as' => 'camps.store'
	]);
});

