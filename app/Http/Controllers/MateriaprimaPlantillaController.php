<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MateriaprimaPlanilla;
use App\MateriaPrima;
use App\Planilla;

class MateriaprimaPlantillaController extends Controller
{

    //leer
    public function leer()
    {
        $materiaprimaplanillas = MateriaprimaPlanilla::paginate(5);

        return view('panel.mpplanillaingresoegresodetalle.mpplanillaingresoegresodetalle', compact('materiaprimaplanillas'));
    }

    //acceder alta
    public function acceder()
    {
        $materiaprimas = MateriaPrima::all();
        $planillas = Planilla::all();
        return view('panel.mpplanillaingresoegresodetalle.mpplanillaingresoegresodetalle_alta', compact('materiaprimas','planillas'));
    }

    //alta
    public function alta(Request $request) {

        //return $request->all();

        //validacion
        $request->validate([
            'cantidad' => 'required'
        ]);

        $nuevaMateriaprimaPlanillas = new MateriaprimaPlanilla;

        $nuevaMateriaprimaPlanillas->cantidad = $request->cantidad;
        $nuevaMateriaprimaPlanillas->materiaprima_id = $request->input('materiaprima_id');
        $nuevaMateriaprimaPlanillas->planilla_id = $request->input('planilla_id');


        $nuevaMateriaprimaPlanillas->save();

        return redirect('mpplanillaingresoegresodetalle')->with('mensaje', 'Materia Prima Ingreso Egreso agregado con exito!');
    }

     //acceder editar
     public function editar($id){

        $materiaprimaplanilla = MateriaprimaPlanilla::findOrFail($id);

        $materiaprimas = MateriaPrima::all();
        $planillas = Planilla::all();

        return view('panel.mpplanillaingresoegresodetalle.mpplanillaingresoegresodetalle_editar',compact('materiaprimaplanilla','materiaprimas','planillas'));
    }

       //update
       public function update(Request $request, $id){

        //validacion
        $request->validate([
            'cantidad' => 'required'
        ]);


        $MateriaprimaPlanillaUpdate = new MateriaprimaPlanilla;

        $MateriaprimaPlanillaUpdate->cantidad = $request->cantidad;
        $MateriaprimaPlanillaUpdate->materiaprima_id = $request->input('materiaprima_id');
        $MateriaprimaPlanillaUpdate->planilla_id = $request->input('planilla_id');


       $MateriaprimaPlanillaUpdate->save();

        return redirect('mpplanillaingresoegresodetalle')->with('mensaje', 'Materia Prima Ingreso Egreso editada con exito!');

    }

      //baja
      public function baja($id){

        $MateriaprimaPlanillaEliminar = MateriaprimaPlanilla::findOrFail($id);
        $MateriaprimaPlanillaEliminar->delete();

        return redirect('mpplanillaingresoegresodetalle')->with('mensaje', 'Materia Prima Ingreso Egreso eliminado con exito!');
    }

}
