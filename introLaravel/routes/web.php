<?php

// Ruta de tipo GET
/* use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); */



// Ruta de tipo VIEW
Route::view('/', 'welcome');

Route::view('/form', 'formulario');


