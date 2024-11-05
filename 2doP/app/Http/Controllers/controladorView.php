<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorView extends Controller
{
    public function home(){
        return view('formUsuarios');
    }
}
