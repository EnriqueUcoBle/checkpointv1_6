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

//////////////////////////////////URLS GENERALES////////////////////////////////////////////////////////////////
Route::get('/login', function () {
    return view('acceder');
});
Route::get('/registro', function () {
    return view('registrar');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', function () {
    return view('logout');
});


///////////////////////////////////// TERMINAN LAS URL GENERALES////////////////////////////////////////////////









///////////////////////////////////// URL USUARIO ADMIN////////////////////////////////////////////////
Route::get('/admin', function () {
    return view('users.admin.inicio_admin');
});
///////////////////////////////////// AQUI TERMINAN LAS URLS DE ADMIN////////////////////////////////////////////////








///////////////////////////////////// URL PARA TUTORES////////////////////////////////////////////////
Route::get('/tutor', function () {
    return view('users.tutor.inicio_tutor');
});
///////////////////////////////////// AQUI TERMIAN LAS URLS DE TUTOR////////////////////////////////////////////////









///////////////////////////////////// URL PARA DOCENTES////////////////////////////////////////////////
Route::get('/docente', function () {
    return view('users.docente.inicio_docente');
});
///////////////////////////////////// AQUI TERMINAN LAS URLS DE DOCENTES////////////////////////////////////////////////










///////////////////////////////////// URL PARA USUARIO SECRETARIO////////////////////////////////////////////////
Route::get('/secretario', function () {
    return view('users.secretario.inicio_secretario');
});
Route::get('/alta_alumno', function () {
    return view('users.secretario.alta_alumno');
});
Route::get('/alta_docente', function () {
    return view('users.secretario.alta_docente');
});
Route::get('/alta_grupo', function () {
    return view('users.secretario.alta_grupo');
});
Route::get('/catalogo_alumno', function () {
    return view('users.secretario.catalogo_alumnos');
});
Route::get('/catalogo_docente', function () {
    return view('users.secretario.catalogo_docente');
});
Route::get('/calificaciones', function () {
    return view('users.secretario.calificaciones');
});
////////////////////////////////////TERMINAN LAS URL DE SECRETARIO//////////////////////////////////////////////////////

