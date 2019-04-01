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

Route::get('/', 'dys@index')->name('home');
Route::post('uf', 'dys@showUf')->name('uf');
Route::get('download/{year}/{month}', 'dys@download')->name('download');
