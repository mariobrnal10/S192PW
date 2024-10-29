<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class ControladorView extends Controller
{
    public Function home(){
        return view('inicio');
    }

    public function libro(){
        return view('registro');
    }
}
