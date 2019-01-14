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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/continents', 'ContinentController@index');
Route::get('/countries', 'CountryController@index');
Route::get('/cities', 'CityController@index');
Route::get('/accounts', 'AccountController@index');
Route::get('/banks', 'BankController@index');
Route::get('/persons', 'PersonController@index');

Route::get('/continents/new', 'ContinentController@create');
Route::post('/continents', 'ContinentController@store');
Route::get('/continents/delete/{id}', 'ContinentController@destroy');
Route::get('/countries/new', 'CountryController@create');
Route::post('/countries', 'CountryController@store');
Route::get('/countries/delete/{id}', 'CountryController@destroy');
Route::get('/cities/new', 'CityController@create');
Route::post('/cities', 'CityController@store');
Route::get('/cities/delete/{id}', 'CityController@destroy');
Route::get('/accounts/new', 'AccountController@create');
Route::post('/accounts', 'AccountController@store');
Route::get('/accounts/delete/{id}', 'AccountController@destroy');
Route::get('/banks/new', 'BankController@create');
Route::post('/banks', 'BankController@store');
Route::get('/banks/delete/{id}', 'BankController@destroy');
Route::get('/persons/new', 'PersonController@create');
Route::post('/persons', 'PersonController@store');
Route::get('/persons/delete/{id}', 'PersonController@destroy');


Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');
