<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotaController extends Controller
{
    //leer
    public function leer()
    {
        return view('panel.notas');
    }

}
