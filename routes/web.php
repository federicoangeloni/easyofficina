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

Route::get('/', function () {
    return view('welcome');
});

//LIST ALL CUSTOMERS
Route::get('/customers', 'CustomerController@getall');


//SEARCH CUSTOMERS
Route::get('/customers/search', 'CustomerController@searchIndex');
Route::post('/customers/search', 'CustomerController@searchResult');

//ADD CUSTOMER
Route::get('/customers/add', 'CustomerController@addIndex');
Route::post('/customers/add', 'CustomerController@add');

//Route::get('/customers/{id}', 'CustomerController@getByID');
