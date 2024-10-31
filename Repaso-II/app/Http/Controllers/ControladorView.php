<?php

namespace App\Http\Controllers;

use App\Http\Requests\Libros; 
use Illuminate\Http\Request;

class ControladorView extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function libro()
    {
        return view('registro');
    }

    public function procesoLibro(Libros $request) 
    {
        $libro = $request->Titulo; 
        session()->flash('Guardado', 'El libro: '.$libro.' se guardó correctamente');
        return to_route('rutaLibro');
    }
}
