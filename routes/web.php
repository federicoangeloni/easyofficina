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

Route::get('test', function () {
    return view('welcome');
});

//--------------------------- CUSTOMER ROUTES ---------------------------------------
//SEARCH CUSTOMERS
Route::get('/customers/search', 'CustomerController@searchIndex');
Route::post('/customers/search', 'CustomerController@searchResult');
Route::get('/customers/search/autocomplete_name', 'CustomerController@autocomplete_name');
Route::get('/customers/search/autocomplete_surname', 'CustomerController@autocomplete_surname');


//ADD CUSTOMER
Route::get('/customers/addPrivate', 'CustomerController@addPrivateIndex');
Route::get('/customers/addEnterprise', 'CustomerController@addEnterpriseIndex');
Route::get('/customers/addSelectType', 'CustomerController@addSelectType');
Route::post('/customers/add', 'CustomerController@add');

//LIST ALL CUSTOMERS
Route::get('/customers', 'CustomerController@getall');
Route::get('/customers/{id}', 'CustomerController@getById')->name('customer');


//---------------------------- VEHICLES ROUTES --------------------------------------

//SEARCH VEHICLES
Route::get('/vehicles/search', 'VehicleController@searchIndex');
Route::post('/vehicles/search', 'VehicleController@searchResult');
Route::get('/vehicles/search/{ownerid}', 'VehicleController@searchByOwnerId');

//ADD VEHICLES
Route::get('/vehicles/add/{ownerid}', 'VehicleController@addIndex');
Route::post('/vehicles/add', 'VehicleController@add');

//LIST ALL VEHICLES
Route::get('/vehicles', 'VehicleController@getall')->name('vehiclelist');
Route::get('/vehicles/{id}', 'VehicleController@getById')->name('vehicle');

//DELETE VEHICLE
ROUTE::get('/vehicles/delete/{id}','VehicleController@delete');


//---------------------------- JOBS ROUTES --------------------------------------

//SEARCH JOBS
Route::get('/jobs/search', 'JobController@searchIndex');
Route::post('/jobs/search', 'JobController@searchResult');
Route::get('/jobs/search/{vehicleid}', 'JobController@searchByVehicleId');

//ADD JOBS
Route::get('/jobs/add/{vehicleid}', 'JobController@addIndex');
Route::post('/jobs/add', 'JobController@add');

//CLOSE JOB
Route::get('/jobs/close/{id}', 'JobController@closeJob');

//LIST ALL JOBS
Route::get('/jobs', 'JobController@getall')->name('joblist');
Route::get('/jobs/{id}', 'JobController@getById')->name('job');

//DELETE JOB
ROUTE::get('/jobs/delete/{id}','JobController@delete');

//LIST OPERATIONS
Route::get('/jobs/{jobid}/operations', 'ElaboraInterventoController@listOperations')->name('listjoboperations');


//--------------------------- WAREHOUSE ROUTES ---------------------------------------//queste andranno inglobate nei futuri controller
//SEARCH WAREHOUSE
Route::get('/warehouses/search', 'WarehouseController@searchIndex');
Route::post('/warehouses/search', 'WarehouseController@searchResult');

//ADD WAREHOUSE
Route::get('/warehouses/add', 'WarehouseController@addIndex');
Route::post('/warehouses/add', 'WarehouseController@add');

//LIST ALL WAREHOUSE
Route::get('/warehouses', 'WarehouseController@getall');
Route::get('/warehouses/{id}', 'WarehouseController@getById')->name('warehouse');


//--------------------------- CATALOG ROUTES ---------------------------------------//queste andranno inglobate nei futuri controller
//SEARCH PARTS IN THE CATALOG
Route::get('/catalog/search', 'CatalogController@searchIndex');
Route::post('/catalog/search', 'CatalogController@searchResult');

//LIST ALL PARTS IN THE CATALOG
Route::get('/catalog', 'CatalogController@getall');
Route::get('/catalog/{partid}', 'CatalogController@getById')->name('catalog');


//---------------------------- SPAREPART ROUTES --------------------------------------//queste andranno inglobate nei futuri controller
//SEARCH PARTS IN THE WAREHOUSES
Route::get('/spareparts/search', 'SparePartController@searchIndex');
Route::post('/spareparts/search', 'SparePartController@searchResult');

//LIST ALL PARTS IN THE WAREHOUSES
Route::get('/spareparts', 'SparePartController@getall');
Route::get('/spareparts/{id}', 'SparePartController@getById')->name('spareparts');
//Route::get('/spareparts/warehouse/{id}', 'SparePartController@getByWarehouseId')->name('sparepartsWarehouse');

//ADD A SPAREPART TO A WAREHOUSE
//To do

//---------------------------- ELABORAINTERVENTO ROUTES --------------------------------------

Route::get('/operations/OperationSelect/{jobid}', 'ElaboraInterventoController@newOperationIndex');
Route::get('/operations/SparePartIndex/{jobid}', 'ElaboraInterventoController@listSpareParts');
Route::get('/operations/ServicesIndex/{jobid}', 'ElaboraInterventoController@listServices');
Route::post('/operations/AddSparePart', 'ElaboraInterventoController@newSparePartUsage');
Route::post('/operations/AddService', 'ElaboraInterventoController@newServiceUsage');
