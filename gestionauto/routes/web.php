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







Route::get('/carburant','AdminController@carburant')->name('carburant');


Route::get('/voiture','AdminController@voiture');






Route::get('/course','AdminController@course');


Route::get('/mail','AdminController@mail')->name('mail');


Route::get('/panne','AdminController@panne')->name('panne');



Route::get('/' , 'LoginsController@login')->name('login');

Route::get('/mdpassoublie' , 'LoginsController@mdpassoublie')->name('mdpassoublie');







// route personnel



Route::resource('personnel', 'PersonnelController');



//rout operateur


Route::resource('user', 'Usercontroller');





// route assurance

Route::resource('/assurance', 'AssuranceController');



//route chauffeur


Route::resource('chauffeur', 'ChauffeurController');



//route fournisseur


Route::resource('fournisseur', 'FournisseurController');



//Route Mission et Courses


Route::resource('mission', 'MissionController');
