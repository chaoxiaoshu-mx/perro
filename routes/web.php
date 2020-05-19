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

Route::get('/', function () { return view('index');});
Route::get('/shopping', function () { return view('front-end.shopping');});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/**
 * 管理员路由
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
	// 管理员后台登录
	Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'LoginController@login');
	Route::post('logout', 'LoginController@logout');

	Route::group(['middleware' => 'auth.admin:admin'], function() {
		// 后台首页
		Route::get('/', 'HomeController@index');
	});
	
});

