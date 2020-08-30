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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//以下のレビュー機能用は一時保留中
//Route::get('shop', 'ShopController@index');
//Route::get('shop/list', 'ShopController@list');
//Route::post('shop/review', 'ShopController@review');