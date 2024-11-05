<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorView;
use App\Http\Controllers\controladorPeticiones;

Route::get('/', [controladorView::class, 'home'])->name('rutaHome');
Route::post('/enviarCliente', [controladorPeticiones::class, 'Validar'])->name('rutaEnviar');
