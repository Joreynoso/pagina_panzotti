<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoMateriaPrima;

class TipoMateriaPrimaController extends Controller
{
    //leer
    public function leer(){
        $tipomateriaprimas = TipoMateriaPrima::paginate(5);

        return view('panel.tipomp.tipomp', compact('tipomateriaprimas'));
    }

    //acceder alta
    public function acceder(){

        return view('panel.tipomp.tipomp_alta');
    }

    //alta
    public function alta(Request $request){

        //return $request->all();  verificar los datos antes de almacenarlos

        //validacion
        $request->validate([
            'nombre' => 'required'
        ]);

        $nuevomateriaprima = new TipoMateriaPrima;

        $nuevomateriaprima->nombre = $request->nombre;

        $nuevomateriaprima->save();

        return redirect('tipomp')->with('mensaje', 'Tipo Materia Prima agregado con exito!');
    }

    //acceder editar
    public function editar($id){

        $tipomateriaprimas = TipoMateriaPrima::findOrFail($id);

        return view('panel.tipomp.tipomp_editar',compact('tipomateriaprimas'));
    }

    //update
    public function update(Request $request, $id){

        //validacion
        $request->validate([
            'nombre' => 'required'
        ]);

        $tipomateriaprimas = TipoMateriaPrima::findOrFail($id);

        $tipomateriaprimas->nombre = $request->nombre;

        $tipomateriaprimas->save();

        return redirect('tipomp')->with('mensaje', 'Tipo Materia Prima actualizado con exito!');
    }

    //baja
    public function baja($id){

        $tipomateriaprimaEliminar= TipoMateriaPrima::findOrFail($id);
        $tipomateriaprimaEliminar->delete();

        return redirect('tipomp')->with('mensaje', 'Tipo Materia Prima eliminado con exito!');
    }

}
