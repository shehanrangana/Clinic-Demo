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

Route::get('/doctor', function () {
    return view('Doctor_dashboard/main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/admin/saveUser', 'UserController@store');