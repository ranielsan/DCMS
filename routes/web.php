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

	//Admin
	Route::get('/administrator', 'AdminController@index')->name('admin.index');
	Route::get('/administrator/create', 'AdminController@create')->name('admin.create');
	Route::post('/administrator/store', 'AdminController@store')->name('admin.store');
	Route::get('/administrator/edit/{user}', 'AdminController@edit')->name('admin.edit');
	Route::get('/administrator/show/{user}', 'AdminController@show')->name('admin.show');
	Route::post('/administrator/update/{user}', 'AdminController@update')->name('admin.update');

	//Patient
	Route::get('/patient', 'PatientController@index')->name('patient.index');
	Route::get('/patient/create', 'PatientController@create')->name('patient.create');
	Route::post('/patient/store', 'PatientController@store')->name('patient.store');
	Route::get('/patient/show/{patient}', 'PatientController@show')->name('patient.show');
	Route::get('/patient/edit/{patient}', 'PatientController@edit')->name('patient.edit');
	Route::post('/patient/update/{patient}', 'PatientController@update')->name('patient.update');
	Route::get('/patient/delete/{patient}', 'PatientController@destroy')->name('patient.delete');

	//Patient Treatment
	Route::get('/patient/show/{patient}/treatment/create', 'PatientTreatmentController@create')->name('patient.patient_treatment.create');
	Route::post('/patient/show/{patient}/treatment/store', 'PatientTreatmentController@store')->name('patient.patient_treatment.store');
	Route::get('/patient/show/{patient}/treatment/show/{treatment}', 'PatientTreatmentController@show')->name('patient.patient_treatment.show');
	Route::get('/patient/show/{patient}/treatment/edit/{treatment}', 'PatientTreatmentController@edit')->name('patient.patient_treatment.edit');
	Route::post('/patient/show/{patient}/treatment/update/{treatment}', 'PatientTreatmentController@update')->name('patient.patient_treatment.update');
	Route::get('/patient/show/{patient}/treatment/delete/{treatment}', 'PatientTreatmentController@delete')->name('patient.patient_treatment.delete');

	//Inventory
	Route::get('/inventory', 'InventoryController@index')->name('inventory.index');

	//Schedule
	Route::get('/schedule', 'ScheduleController@index')->name('schedule.index');
});
