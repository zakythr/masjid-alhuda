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
    return redirect('admin/login');
});

// Auth::routes();

Route::prefix('admin')->group(function () {

	// Route::get('login', 'AdminAuth\LoginController@index')->name('login');

	// Authentication Routes...
	Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'AdminAuth\LoginController@login');
	Route::post('logout', 'AdminAuth\LoginController@logout')->name('admin.logout');

	// Password Reset Routes...
	Route::get('password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::post('password/reset', 'AdminAuth\ResetPasswordController@reset');

});

Route::get('/home', 'HomeController@index')->name('home');
