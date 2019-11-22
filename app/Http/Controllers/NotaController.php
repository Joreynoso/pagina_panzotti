<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotaController extends Controller
{
    //leer
    public function leer(){
        $notas = Nota::paginate(8);

        return view('panel.notas',compact('notas'));
    }

    //acceder alta
    public function acceder(){

        return view('panel.nota_alta');
    }
    
    //alta
    public function alta(Request $request){

        //return $request->all();  verificar los datos antes de almacenarlos

        //validacion
        $request->validate([
            'descripcion' => 'required'
        ]);

        $nuevaNota = new Nota;

        $nuevaNota->descripcion = $request->descripcion;
        $nuevaNota->urgencia = $request->input('urgencia');

        $nuevaNota->save();

        return redirect('notas')->with('mensaje', 'Nueva Tarea agregada!');
    }


}
