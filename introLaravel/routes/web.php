<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');

Route::get('/form', [controladorVistas::class, 'formulario'])->name('rutaformulario');

Route::get('/clientes', [controladorVistas::class, 'consulta'])->name('rutaclientes');

Route::view('/component','componentes')->name('rutacomponenetes');

Route::post('/enviarCliente',[controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');




// Ruta de tipo GET
/* use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); */



// Rutas de tipo VIEW
/* Route::view('/', 'inicio')->name('rutainicio');

Route::view('/form', 'formulario')->name('rutaformulario');

Route::view('/clientes', 'clientes')->name('rutaclientes');

Route::view('/component','componentes')->name('rutacomponenetes'); */

