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

Route::get('/', 'PageController@index')->name('pages.index');
Route::get('/about', 'PageController@about')->name('pages.about');
Route::get('/contact', 'PageController@contact')->name('pages.contact');

Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/canvas', 'AdminController@index')->name('canvas');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
