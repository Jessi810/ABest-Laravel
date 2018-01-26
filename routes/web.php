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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('transport', 'TransportController')->middleware('auth');
Route::resource('package', 'PackageController')->middleware('auth');

Route::get('shop', 'ShopController@index')->name('shop.index');
Route::get('item', 'ShopController@item')->name('shop.item');