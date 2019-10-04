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

Route::get('/chauffeur','AdminController@chauffeur')->name('chauffeur');

Route::get('/fournisseur','AdminController@fournisseur')->name('fournisseur');

Route::get('/carburant','AdminController@carburant')->name('carburant');

Route::get('/voiture','AdminController@voiture');

Route::get('/operateur','OperateurController@index')->name('operateur');

Route::Post('/operateur','OperateurController@store')->name('operateur.store');



Route::get('/garage','AdminController@garage')->name('garage');

Route::get('/documents','AdminController@documents')->name('document');

Route::get('/stock','AdminController@stock')->name('stock');

Route::get('/maps','AdminController@maps')->name('maps');





// les mission et course

Route::get('/mission','AdminController@mission');

Route::get('/course','AdminController@course');


Route::get('/mail','AdminController@mail')->name('mail');


Route::get('/panne','AdminController@panne')->name('panne');



Route::get('/' , 'LoginsController@login')->name('login');

Route::get('/mdpassoublie' , 'LoginsController@mdpassoublie')->name('mdpassoublie');

