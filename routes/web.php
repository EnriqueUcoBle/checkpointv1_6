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
Route::get('/registro', function () {
    return view('registrar');
});
Route::get('/inicio', function () {
    return view('login');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/validar_regristro', function () {
    //return view('');
});



///////////////////////////////////// TERMINAN LAS URL GENERALES////////////////////////////////////////////////









///////////////////////////////////// URL USUARIO ADMIN////////////////////////////////////////////////
Route::get('/admin', function () {
    return view('users.admin.inicio_admin');
});
Route::get('/admin_user', function () {
    return view('users.admin.administrar_user');
});
///////////////////////////////////// AQUI TERMINAN LAS URLS DE ADMIN////////////////////////////////////////////////








///////////////////////////////////// URL PARA TUTORES////////////////////////////////////////////////
Route::get('/profile_tutor', function () {
    return view('users.tutor.inicio_tutor');
});
Route::get('/resumen', function () {
    return view('users.tutor.resumen');
});
Route::get('/kardex', function () {
    return view('users.tutor.kardex');
});
Route::get('/reportes', function () {
    return view('users.tutor.reportes');
});
Route::get('/individual', function () {
    return view('users.tutor.calificaciones');
});
Route::get('/asistencias', function () {
    return view('users.tutor.asistencias');
});
Route::get('/update_info_tutor', function () {
    return view('users.tutor.update_info');
});
///////////////////////////////////// URL PARA TUTORES////////////////////////////////////////////////

///////////////////////////////////// AQUI TERMIAN LAS URLS DE TUTOR////////////////////////////////////////////////









///////////////////////////////////// URL PARA DOCENTES////////////////////////////////////////////////
Route::get('/docente', function () {
    return view('users.docente.inicio_docente');
});
Route::get('/califcaciones_grupal', function () {
    return view('users.docente.calificaciones');
});
Route::get('/asistencia_grupal', function () {
    return view('users.docente.asistencias');
});
Route::get('/reportar', function () {
    return view('users.docente.reporte');
});
///////////////////////////////////// AQUI TERMINAN LAS URLS DE DOCENTES////////////////////////////////////////////////










///////////////////////////////////// URL PARA USUARIO SECRETARIO////////////////////////////////////////////////
Route::get('/profile_cap', function () {
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
Route::get('/update_info', function () {
    return view('users.secretario.update_info');
});
////////////////////////////////////TERMINAN LAS URL DE SECRETARIO//////////////////////////////////////////////////////

