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
	Route::get('/voucher', 'VoucherController@index')->name('voucher.index');
	Route::get('/voucher/create', 'VoucherController@create')->name('voucher.create');
	Route::post('/voucher/store', 'VoucherController@store')->name('voucher.store');
	Route::get('/voucher/edit/{voucher}', 'VoucherController@edit')->name('voucher.edit');
	Route::post('/voucher/update/{voucher}', 'VoucherController@update')->name('voucher.update');
	Route::get('/voucher/delete/{voucher}', 'VoucherController@destroy')->name('voucher.delete');
	Route::get('/voucher/show/{voucher}', 'VoucherController@show')->name('voucher.show');
	//Report
	Route::get('/reports', 'ReportsController@index');

	
});
