<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    // public function leer(Request $request){

    //     $buscar = $request->get('buscarpor');

    //     $tipo = $request->get('tipo');

    //     $variablesurl = $request->all();

    //     $usuarios = User::buscarpor($tipo, $buscar)->paginate(5)->appends($variablesurl);

    //     return view('panel.user.user', compact('usuarios'));
    // }

    //leer
    public function leer(){
        $usuarios = User::paginate(5);

        return view('panel.user.user', compact('usuarios'));
    }


    //acceder editar
    public function editar($id){

        $usuario = User::findOrFail($id);

        return view('panel.user.user_editar',compact('usuario'));
    }

    //update
    public function update(Request $request, $id){

        //validacion
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'apellido' => 'required',
            'domicilio' => 'required',
            'tel'=>'required'
        ]);

        $usuarioUpdate = User::findOrFail($id);

        $usuarioUpdate->name = $request->name;
        $usuarioUpdate->email = $request->email;
        $usuarioUpdate->apellido = $request->apellido;
        $usuarioUpdate->domicilio = $request->domicilio;
        $usuarioUpdate->tel = $request->tel;


        $usuarioUpdate->save();

        return redirect('user')->with('mensaje', 'Usuario actualizado con exito!');

    }

    //baja
    public function baja($id){

        $usuarioEliminar = User::findOrFail($id);
        $usuarioEliminar->delete();

        return redirect('user')->with('mensaje', 'Usuario eliminado con exito!');
    }

    //exportar a pdf
    public function exporPdf(){

        $usuarios = User::get();

        $pdf = PDF::loadView('pdf.userpdf', compact('usuarios'));

        return $pdf->download('usuarios-panzotti-lista.pdf');

    }
}
