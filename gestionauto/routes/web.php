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

//Route::resource('carburant', 'CarburantController');

Route::get('carburant.index', 'CarburantController@index')->name('carburant.index');

Route::get('/carburant.create', 'Carburantcontroller@create')->name('carburant.create');

Route::get('carburant.show/{carburants}', 'CarburantController@show')->name('carburant.show');

Route::post('carburant.store', 'CarburantController@store')->name('carburant.store');

Route::get('carburant/{carburants}/edit', 'CarburantController@edit')->name('carburant.edit');

Route::patch('/carburant.update/{carburants}/','CarburantController@update')->name('carburant.update');

Route::post('/carburant.destroy/{id}/','CarburantController@destroy')->name('carburant.destroy');




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

//Route::resource('/assurance', 'AssuranceController');

Route::get('/assurance.index', 'AssuranceController@index')->name('assurance.index');

Route::post('/assurance.store', 'AssuranceController@store')->name('assurance.store');

Route::get('assurance.show/{assurances}', 'AssuranceController@show')->name('assurance.show');

Route::get('assurance/{assurances}/edit', 'AssuranceController@edit')->name('assurance.edit');

Route::patch('/assurance.update/{assurances}/','Assurancecontroller@update')->name('assurance.update');

Route::post('/assurance.destroy/{id}/','AssuranceController@destroy')->name('assurance.destroy');



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




Route::get('mission.index', 'MissionController@index')->name('mission.index');

Route::get('/mission.create', 'MissionController@create')->name('mission.create');

Route::get('/mission.show/{missions}', 'MissionController@show')->name('mission.show');

Route::post('/mission.store', 'MissionController@store')->name('mission.store');

Route::get('/mission/{mission}/edit','MissionController@edit')->name('mission.edit');

Route::destroy('/mission.destroy/{missions}','MissionController@destroy')->name('mission.destroy');


Route::patch('/mission.update/{mission}/','Usercontroller@update')->name('mission.update');






Route::get('mencoure','MissionController@mencoure');

Route::resource('/course', 'courseController');



//Route Vehicule

Route::resource('/vehicule', 'VehiculeController');





//Route Garage

//Route::resource('/garage', 'GarageController');

Route::get('garage.index', 'GarageController@index')->name('garage.index');

Route::post('/garage.store', 'GarageController@store')->name('garage.store');

Route::get('garage.show/{garages}', 'GarageController@show')->name('garage.show');

Route::get('garage/{garages}/edit', 'GarageController@edit')->name('garage.edit');

Route::patch('/garage.update/{garages}/','GarageController@update')->name('garage.update');

Route::post('/garage.destroy/{id}/','GarageController@destroy')->name('garage.destroy');



//Route Maintenance



Route::get('/maintenance.index', 'MaintenanceController@index')->name('maintenance.index');

Route::get('maintenance.show/{maintenances}', 'MaintenanceController@show')->name('maintenance.show');

Route::get('/maintenance.create', 'MaintenanceController@create')->name('maintenance.create');

Route::get('maintenance/{maintenances}/edit', 'MaintenanceController@edit')->name('maintenance.edit');

Route::patch('/maintenance.update/{maintenances}/','MaintenanceController@update')->name('maintenance.update');

Route::post('/maintenance.store', 'MaintenanceController@store')->name('maintenance.store');

Route::post('/maintenance.destroy/{id}/','MaintenanceController@destroy')->name('maintenance.destroy');




//route STOCK

Route::resource('stock', 'StockController');



// Route course en course


Route::get('cencoure','CourseController@cencoure');
