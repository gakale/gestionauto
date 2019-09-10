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

Route::get('/operateur','AdminController@operateur')->name('operateur');

Route::get('/mail','MailController@index')->name('mail');


Route::get('/' , function () {
    return view('login/login');
});


Route::get('mdpassoublie' , function () {
    return view('login/mdpassoublie');
});
