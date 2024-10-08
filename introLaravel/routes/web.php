<?php

// Ruta de tipo GET
/* use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); */



// Rutas de tipo VIEW
Route::view('/', 'inicio')->name('rutainicio');

Route::view('/form', 'formulario')->name('rutaformulario');

Route::view('/clientes', 'clientes')->name('rutaclientes');