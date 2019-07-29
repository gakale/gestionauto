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


Route::get('/dashboard','AdminController@index')->name('dash');

Route::get('/users','AdminController@users')->name('users');

Route::get('/chauffeur','AdminController@operateur')->name('chauffeur');

Route::get('/operateur','AdminController@operateur')->name('operateur');

Route::get('/fournisseur','AdminController@operateur')->name('fournisseur');