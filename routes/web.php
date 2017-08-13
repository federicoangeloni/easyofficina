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
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\JobContoller;
use App\User;


//--------------------------- GENERAL ROUTES ---------------------------------------
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/test', function () {
    return view('welcome');
});

//--------------------------- CUSTOMER ROUTES ---------------------------------------
//SEARCH CUSTOMERS
Route::get('/customers/search', 'CustomerController@searchIndex');
Route::post('/customers/search', 'CustomerController@searchResult');

//ADD CUSTOMER
Route::get('/customers/addPrivate', 'CustomerController@addPrivateIndex');
Route::get('/customers/addEnterprise', 'CustomerController@addEnterpriseIndex');
Route::get('/customers/addSelectType', 'CustomerController@addSelectType');
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

//---------------------------- JOBS ROUTES --------------------------------------

//SEARCH JOBS
Route::get('/jobs/search', 'JobController@searchIndex');
Route::post('/jobs/search', 'JobController@searchResult');
Route::get('/jobs/search/{vehicleid}', 'JobController@searchByVehicleId');

//ADD JOBS
Route::get('/jobs/add/{vehicleid}', 'JobController@addIndex');
Route::post('/jobs/add', 'JobController@add');

//LIST ALL JOBS
Route::get('/jobs', 'JobController@getall');
Route::get('/jobs/{id}', 'JobController@getById');

