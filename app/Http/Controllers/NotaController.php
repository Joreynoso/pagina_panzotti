<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotaController extends Controller
{
    //leer
    public function leer(Request $request){

        $tipo = $request->get('tipo');

        $variablesurl = $request->all();

        if ($tipo == "mas reciente") {

            $notas = Nota::orderBy('created_at', 'DESC')->paginate(8)->appends($variablesurl);

            return view('panel.notas',compact('notas'));
        }

        if ($tipo == "menos reciente") {

            $notas = Nota::orderBy('created_at', 'ASC')->paginate(8)->appends($variablesurl);

            return view('panel.notas',compact('notas'));
        }

        if ($tipo == "mas urgente") {

            $notas = Nota::orderBy('urgencia','ASC')->paginate(8)->appends($variablesurl);

            return view('panel.notas',compact('notas'));
        }

        if ($tipo == "menos urgente") {

            $notas = Nota::orderBy('urgencia','DESC')->paginate(8)->appends($variablesurl);

            return view('panel.notas',compact('notas'));
        }

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
    
    //baja
    public function baja($id){

        $notaEliminar = Nota::findOrFail($id);
        $notaEliminar->delete();

        return redirect('notas')->with('mensaje', 'Cliente eliminado con exito!');
    }


}
