<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class ComentarioController extends Controller
{
    public function mostrar(){

        return view('/panel/comentario');
    }

    //leer
    public function leer(){

        $comentarios = Comentario::paginate(10);;

        return view('/panel/comentario',compact('comentarios'));
    }
}
