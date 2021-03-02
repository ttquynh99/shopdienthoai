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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/admin/nhasx', 'Backend\NhasanxuatController' , ['as' => 'admin']);
Route::resource('/admin/sanpham', 'Backend\SanphamController' , ['as' => 'admin']);
Route::resource('/admin/thanhtoan', 'Backend\ThanhtoanController' , ['as' => 'admin']);


Route::get('/pages/gioithieu','Frontend\FrontendController@gioi_thieu');
Route::get('/pages/cauhoi','Frontend\FrontendController@cauhoi');
