<?php

use App\Shop;
use App\ShopReview;

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

// 通常ユーザー 未ログイン
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('register', 'Auth\RegisterController@showRegisterForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::get('password/rest', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// 通常ユーザー ログイン済
Route::group(['prefix' => '', 'middleware' => 'auth'], function(){
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', 'HomeController@index')->name('home');
});

// 管理者未ログイン
Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function() {
Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login');
Route::get('register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
Route::post('register', 'Admin\Auth\RegisterController@register')->name('admin.register');
Route::get('password/rest', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
});
// 管理者ログイン済
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
Route::get('/', 'Admin\HomeController@index')->name('home');
});


//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//以下のレビュー機能用は一時保留中
//Route::get('shop', 'ShopController@index');
//Route::get('shop/list', 'ShopController@list');
//Route::post('shop/review', 'ShopController@review');