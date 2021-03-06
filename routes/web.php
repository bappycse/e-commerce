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

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/test', function () {
    return view('admin.test');
});

Route::get('/product', function () {
    return view('frontend.layout.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@adminDashboard')->name('admin');

Route::get('/product/single', function () {
    return view('frontend.layout.single');
});

