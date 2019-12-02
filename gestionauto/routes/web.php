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




// ROUTE logins


Route::resource('/login', 'LoginsController');






Route::get('/dashboard','AdminController@index')->name('dash');


Route::get('/users','AdminController@users')->name('users');







Route::get('/mail','AdminController@mail')->name('mail');




Route::get('/mdpassoublie' , 'LoginsController@mdpassoublie')->name('mdpassoublie');





// route carburant


Route::resource('carburant', 'CarburantController');




// route personnel

Route::get('personnel.index', 'PersonnelController@index')->name('personnel.index');

Route::get('personnel.show/{personnel}', 'PersonnelController@show')->name('personnel.show');

Route::post('personnel.store', 'PersonnelController@store')->name('personnel.store');

Route::get('personnel/{personnels}/edit', 'PersonnelController@edit')->name('personnel.edit');

Route::patch('/personnel.update/{personnels}/','PersonnelController@update')->name('personnel.update');



//rout operateur


Route::get('user.index', 'Usercontroller@index')->name('user.index');

Route::get('/user.create', 'Usercontroller@create')->name('user.create');

Route::get('/user.show/{user}', 'Usercontroller@show')->name('user.show');

Route::post('/user.store', 'Usercontroller@store')->name('user.store');

Route::get('/user/{user}/edit','Usercontroller@edit')->name('user.edit');


Route::patch('/user.update/{user}/','Usercontroller@update')->name('user.update');


// route assurance

Route::resource('/assurance', 'AssuranceController');



//route chauffeur


Route::get('/chauffeur.index', 'ChauffeurController@index')->name('chauffeur.index');


Route::get('/chauffeur.create', 'ChauffeurController@create')->name('chauffeur.create');


Route::post('/chauffeur.store', 'ChauffeurController@store')->name('chauffeur.store');

Route::get('/chauffeur.show/{chauffeurs}','ChauffeurController@show')->name('chauffeur.show');

Route::get('/chauffeur/{chauffeurs}/edit','Usercontroller@edit')->name('chauffeur.edit');


Route::patch('/chauffeur.update/{chauffeurs}/','Usercontroller@update')->name('chauffeur.update');





//route fournisseur


Route::resource('fournisseur', 'FournisseurController');



//Route Mission et Courses


Route::resource('/mission', 'MissionController');



Route::get('mencoure','MissionController@mencoure');

Route::resource('/course', 'courseController');



//Route Vehicule

Route::resource('/vehicule', 'VehiculeController');

//Route Maintenance



Route::get('/maintenance.index', 'MaintenanceController@index')->name('maintenance.index');


Route::get('/maintenance.create', 'MaintenanceController@create')->name('maintenance.create');


Route::post('/maintenance.store', 'MaintenanceController@store')->name('maintenance.store');




Route::get('/chauffeur.show/{chauffeurs}','MaintenanceController@show')->name('chauffeur.show');

Route::get('/chauffeur/{chauffeurs}/edit','Usercontroller@edit')->name('chauffeur.edit');


Route::patch('/chauffeur.update/{chauffeurs}/','Usercontroller@update')->name('chauffeur.update');


//route STOCK

Route::resource('stock', 'StockController');



// Route course en course


Route::get('cencoure','CourseController@cencoure');
