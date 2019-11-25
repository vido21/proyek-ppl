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
Route::get('/peminjaman', 'HomeController@peminjaman')->name('peminjaman');
Route::get('/pinjam', 'BorrowController@index')->name('pinjam');
Route::post('/pinjam', 'BorrowController@create')->name('pinjam');
Route::post('/pengembalian', 'BorrowController@destroy')->name('pinjam');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
