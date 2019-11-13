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

Route::resource('personnel', 'PersonnelController');



//rout operateur


Route::get('user.index', 'Usercontroller@index')->name('user.index');

Route::get('/user.create', 'Usercontroller@create')->name('user.create');

Route::get('/user.show/{user}', 'Usercontroller@show')->name('user.show');

Route::post('/user.store', 'Usercontroller@store')->name('user.store');

Route::get('/user/{user}/edit','Usercontroller@edit')->name('user.edit');




Route::patch('/user/{user}/','Usercontroller@update')->name('user.update');


// route assurance

Route::resource('/assurance', 'AssuranceController');



//route chauffeur


Route::resource('chauffeur', 'ChauffeurController');



//route fournisseur


Route::resource('fournisseur', 'FournisseurController');



//Route Mission et Courses


Route::resource('/mission', 'MissionController');



Route::get('mencoure','MissionController@mencoure');

Route::resource('/course', 'courseController');



//Route Vehicule

Route::resource('/vehicule', 'VehiculeController');

//Route Maintenance

Route::resource('/maintenance', 'MaintenanceController');



//route STOCK

Route::resource('stock', 'StockController');



// Route course en course


Route::get('cencoure','CourseController@cencoure');



