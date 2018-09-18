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
    return view('index');
});

Route::get('admin', function () {
    return view('Admin_dashboard/main');
});

Route::get('admin/newpatient', function () {
    return view('Admin_dashboard/newpatient');
});

Route::get('admin/newuser', function () {
    return view('Admin_dashboard/newuser');
});

Route::get('admin/appointments', function () {
    return view('Admin_dashboard/appointments');
});

Route::get('admin/patients', function () {
    $data = App\Patient::all();
    return view('Admin_dashboard/patients')->with('patients', $data);
});

Route::get('admin/users', function () {
    $data = App\User::all();
    return view('Admin_dashboard/users')->with('users', $data);
});

Route::get('admin/pharmacy', function () {
    return view('Admin_dashboard/pharmacy');
});

Route::get('admin/sms', function () {
    return view('Admin_dashboard/sms');
});

Route::get('admin/myaccount', function () {
    return view('Admin_dashboard/myaccount');
});


Route::post('/admin/saveUser', 'UserController@store');
Route::post('/admin/savePatient', 'PatientController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');