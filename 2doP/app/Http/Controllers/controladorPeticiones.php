<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorRegistro;
use Illuminate\Http\Request;


class controladorPeticiones extends Controller
{
    public function Validar(validadorRegistro $registro){
        $correo = $registro->input('correo');
        session()->flash('exito', 'Se ha guardado de manera correcta el correo: '.$correo);
        return to_route('rutaHome');
    }
}
