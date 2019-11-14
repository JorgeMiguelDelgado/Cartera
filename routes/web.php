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
Route::resource('/gastos','GastosController');
Route::resource('/ingresos','IngresosController');

Route::get('/gastos','GastosController@index')->name('init');
Route::get('/gastos/create','GastosController@create');
Route::post('/gastos','GastosController@store')->name('gasto.store');

Route::get('/ingresos','IngresosController@index')->name('ing');
Route::get('/ingresos/create','IngresosController@create');
Route::post('/ingresos','IngresosController@store')->name('ingreso.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect','SocialController@redirect');
Route::get('/callback','SocialController@callback');


Route::get('/github','SocialController@github');
Route::get('/github/f','SocialController@sgithub');
