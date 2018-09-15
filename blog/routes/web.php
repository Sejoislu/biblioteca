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

Route::get('saludo/{nombre}', function ($nombre) {
    return "hola ".$nombre ;
});

Route::get('ejemplo','EjemploController@ejemplo');

Route::get('Libro/nuevo', function(){
	return view('Libros.nuevoLibro');
});