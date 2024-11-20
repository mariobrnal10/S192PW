<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;



//controlador vistas
Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');


Route::view('/component','componentes')->name('rutacomponenetes');

Route::post('/enviarCliente',[controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');


// Controlador Cliente
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaformulario');

Route::post('/cliente', [clienteController::class, 'store'])->name('enviaCliente');

Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');

Route::get('/clientes/{id}/edit', [clienteController::class, 'edit'])->name('rutaEdit');