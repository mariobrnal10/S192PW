<?php

// Ruta de tipo GET
/* use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); */



// Rutas de tipo VIEW
Route::view('/', 'welcome');

Route::view('/form', 'formulario')->name('rutaformulario');

Route::view('/clin', 'clientes')->name('rutaclientes');

Route::view('/in', 'inicio')->name('rutainicio');


