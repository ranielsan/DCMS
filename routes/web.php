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

// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('registernewuser', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('registervalidate', 'Auth\RegisterController@register')->name('register');


Route::middleware('auth')->group(function() {
	//Dashboard
	Route::get('/', 'DashboardController@index')->name('home');

	//Voucher
	Route::get('/voucher', 'VoucherController@index')->name('voucher.index');
	Route::get('/voucher/create', 'VoucherController@create')->name('voucher.create');
	Route::post('/voucher/store', 'VoucherController@store')->name('voucher.store');
	Route::get('/voucher/edit/{voucher}', 'VoucherController@edit')->name('voucher.edit');
	Route::post('/voucher/update/{voucher}', 'VoucherController@update')->name('voucher.update');
	Route::get('/voucher/delete/{voucher}', 'VoucherController@destroy')->name('voucher.delete');
	Route::get('/voucher/show/{voucher}', 'VoucherController@show')->name('voucher.show');
	Route::get('/voucher/print/{voucher}', 'VoucherController@print')->name('voucher.print');
	//Report
	Route::get('/reports', 'ReportsController@index');

	//Change Password
	Route::get('/changepassword', 'Auth\ChangePasswordController@index')->name('changepassword.index');
	Route::get('/changepassword/update', 'Auth\ChangePasswordController@changePassword')->name('changepassword.update');
});
