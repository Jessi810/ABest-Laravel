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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@comingSoon')->name('home.soon');
Route::get('contact', function() {
    return view('contact/index');
});

Route::resource('transport', 'TransportController')->middleware('auth');
Route::resource('package', 'PackageController')->middleware('auth');

Route::get('shop', 'ShopController@index')->name('shop.index');
Route::get('item/{id}', 'ShopController@item')->name('shop.item');
Route::get('book/{id}', 'ShopController@book')->name('shop.book');
Route::get('booking', 'ShopController@booking')->name('shop.booking');