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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/keranjang', 'HomeController@keranjang')->name('keranjang');
Route::get('/buy', 'ChartController@index')->name('chart');
Route::post('/buy', 'ChartController@create')->name('addToChart');
Route::get('/checkout', 'OrderController@index')->name('checkout');
Route::post('/checkout', 'OrderController@create')->name('bayar');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
