<?php

Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout');

Route::group(['middleware' => 'auth.admin:admin'], function() {
	// 后台首页
	Route::get('/', 'HomeController@index');
});
