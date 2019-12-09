<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Nota;
use App\ProductoVenta;
use App\Comentario;

class AdminController extends Controller{

    //noticias principales
    //cantidad usuarios nuevos
    //cantidad tareas pendientes (notas)
    //cantidad nuevos comentarios de clientes
    
    public function mostrar(){

        $usuarios = User::where('is_empleado','0')->where('is_admin','0')->paginate();

        $notas = Nota::paginate();

        $pedidos = ProductoVenta::paginate();

        $comentarios = Comentario::paginate();

        return view('/panel/principal', compact('usuarios','notas','pedidos','comentarios'));
    }

}
