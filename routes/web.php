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

Route::get('/login', function () {
    return view('acceder');
});
Route::get('/registro', function () {
    return view('registrar');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/operador/dashboard', function () {
    return view('dashboard');
});


Route::get('/panel', 'PricipalController@index');
Route::get('/inicio/{id}', 'LoginLogout@Index');
//Route::resource("pagina","PricipalController");


