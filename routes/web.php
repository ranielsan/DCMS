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

Auth::routes();


Route::middleware('auth')->group(function() {
	//Dashboard
	Route::get('/', 'DashboardController@index')->name('home');

	//Voucher
	Route::get('/voucher', 'VoucherController@index');
	Route::get('/voucher/create', 'VoucherController@create')->name('voucher.create');

	//Report
	Route::get('/reports', 'ReportsController@index');

	
});
