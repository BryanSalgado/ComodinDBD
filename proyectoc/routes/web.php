<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/inicioBusqueda', function () {
    return view('inicioBusqueda');
});

Route::get('/detalle', function () {
    return view('detalle');
});

Route::get('/exitoso', function () {
    return view('exitoso');
});

Route::get('/agregar', function () {
    return view('agregar');
});

Route::post('/mostrarAutos','AutoController@filtrados')->name('fil');

Route::post('/agregarAutos','AutoController@storeV')->name('nuevoAuto');

Route::get('/mostrarDetalle/{id}','AutoController@detalle');
