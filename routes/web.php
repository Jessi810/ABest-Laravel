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
// Route::get('/', 'HomeController@comingSoon')->name('home.soon');
Route::get('/', function() {
    return view('home');
})->name('home.soon');
Route::get('contact', 'ContactController@index')->name('contact.index');
Route::post('contact', 'ContactController@message')->name('contact.message');

Route::resource('transport', 'TransportController')->middleware('auth');
Route::resource('package', 'PackageController')->middleware('auth');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::resource('user', 'UserController');
});

Route::get('shop', 'ShopController@index')->name('shop.index');
Route::get('item/{id}', 'ShopController@item')->name('shop.item');
Route::get('book/{id}', 'ShopController@book')->name('shop.book');
Route::post('booking/{id}', 'BookingController@booking')->name('shop.booking');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('dashboard', 'DashboardController@index');
});