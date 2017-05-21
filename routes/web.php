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
use App\Http\Controllers\CustomerController;
use App\User;


//--------------------------- GENERAL ROUTES ---------------------------------------
Route::get('/', function () {
    return view('welcome');
});

//--------------------------- CUSTOMER ROUTES ---------------------------------------
//SEARCH CUSTOMERS
Route::get('/customers/search', 'CustomerController@searchIndex');
Route::post('/customers/search', 'CustomerController@searchResult');

//ADD CUSTOMER
Route::get('/customers/add', 'CustomerController@addIndex');
Route::post('/customers/add', 'CustomerController@add');

//LIST ALL CUSTOMERS
Route::get('/customers', 'CustomerController@getall');
Route::get('/customers/{id}', 'CustomerController@getById');

//---------------------------- VEHICLES ROUTES --------------------------------------

//SEARCH VEHICLES
Route::get('/vehicles/search', 'VehicleController@searchIndex');
Route::post('/vehicles/search', 'VehicleController@searchResult');
Route::get('/vehicles/search/{ownerid}', 'VehicleController@searchByOwnerId');

//ADD VEHICLES
Route::get('/vehicles/add/{ownerid}', 'VehicleController@addIndex');
Route::post('/vehicles/add', 'VehicleController@add');

//LIST ALL VEHICLES
Route::get('/vehicles', 'VehicleController@getall');
Route::get('/vehicles/{id}', 'VehicleController@getById');



