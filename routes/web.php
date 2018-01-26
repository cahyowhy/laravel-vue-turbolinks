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

Route::get('/', 'SignatureWebController@index')->name('home');

Route::get('sign', 'SignatureWebController@create')->name('sign');

Route::get('show/{signature}', 'SignatureWebController@show')->name('show');