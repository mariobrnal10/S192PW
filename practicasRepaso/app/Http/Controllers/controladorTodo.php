<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorTodo extends Controller
{
    public function home(){
        return view('inicio');
    }
}
