<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorView;

Route::get('/', [ControladorView::class, 'home'])->name('rutaHome');
Route::get('/book', [ControladorView::class, 'libro'])->name('rutaLibro');
Route::post('registrarLibro', [ControladorView::class, 'procesoLibro'])->name('rutaEnviar');
