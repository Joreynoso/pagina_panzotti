<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Receta;

class RecetaController extends Controller
{
    //leer
    public function leer()
    {
        $recetas = Receta::paginate(5);

        return view('panel.receta.receta', compact('recetas'));
    }

    //acceder alta
    public function acceder(){

        return view('panel.receta.receta_alta');
    }

    //acceder receta pagina
    public function leerprincipal(){

        return view('pagina.receta-principal');
    }

    //alta
    public function alta(Request $request){

        //return $request->all();  verificar los datos antes de almacenarlos

        //validacion
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $nuevareceta = new Receta;

        $nuevareceta->nombre = $request->nombre;
        $nuevareceta->descripcion = $request->descripcion;


        $nuevareceta->save();

        return redirect('receta')->with('mensaje', 'Receta agregada con exito!');
    }

    //acceder editar
    public function editar($id){

        $receta = Receta::findOrFail($id);

        return view('panel.receta.receta_editar',compact('receta'));
    }

    //update
    public function update(Request $request, $id){

        //validacion
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $recetaUpdate = Receta::findOrFail($id);

        $recetaUpdate->nombre = $request->nombre;
        $recetaUpdate->descripcion = $request->descripcion;


        $recetaUpdate->save();

        return redirect('receta')->with('mensaje', 'Recata actualizada con exito!');

    }

    //baja
    public function baja($id){

        $recetaEliminar = Receta::findOrFail($id);
        $recetaEliminar->delete();

        return redirect('receta')->with('mensaje', 'Receta eliminada con exito!');
    }
}
