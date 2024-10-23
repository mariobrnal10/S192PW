<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function formulario(){
        return view('formulario');
    }

    public function consulta(){
        return view('clientes');
    }

    public function procesarCliente(Request $peticion){
        // respuestas de redireccion
       // return redirect('/');
    
       //redireccion den el nombre de la ruta.
       //return redirect()->route('rutaclientes');

       //redireccion del origen
       //return back();

       //redireccion con valores en sesion
    $usuario = $peticion->input('txtnombre');

    session()->flash('exito', 'Se guardo el usuario: '.$usuario);
    return to_route('rutaformulario');
    


    
    }



}
