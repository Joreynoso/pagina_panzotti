<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planilla;
use App\TipoMovimiento;
use App\Empleado;

class PlantillaController extends Controller
{
    //leer
    public function leer()
    {
        $planillas = Planilla::paginate(5);

        return view('panel.mpplanillaingresoegreso.mpplanillaingresoegreso', compact('planillas'));
    }

    //acceder alta
    public function acceder()
    {
        $tipomovimientos = TipoMovimiento::all();

        $empleados = Empleado::all();

        return view('panel.mpplanillaingresoegreso.mpplanillaingresoegreso_alta', compact('tipomovimientos', 'empleados'));
    }

    //alta
    public function alta(Request $request) {

        //return $request->all();

        //validacion
        $request->validate([
            'fecha' => 'required',
            'observacion' => 'required'
        ]);

        $nuevaPlanilla = new Planilla();

        $nuevaPlanilla->fecha = $request->fecha;
        $nuevaPlanilla->observacion = $request->observacion;
        $nuevaPlanilla->tipomovimiento_id = $request->input('tipomovimiento_id');
        $nuevaPlanilla->empleado_id = $request->input('empleado_id');

        $nuevaPlanilla->save();

        return redirect('mpplanillaingresoegreso')->with('mensaje', 'Planilla Ingreso/Egreso agregado con exito!');
    }

     //acceder editar
     public function editar($id){

        $planillas = Planilla::findOrFail($id);

        $tipomovimientos = TipoMovimiento::all();

        $empleados = Empleado::all();

        return view('panel.mpplanillaingresoegreso.mpplanillaingresoegreso_editar',compact('planillas','tipomovimientos', 'empleados'));
        }

       //update
       public function update(Request $request, $id){

        //validacion
        $request->validate([
            'fecha' => 'required',
            'observacion' => 'required'
        ]);


        $PlanillaUpdate = new Planilla();

        $PlanillaUpdate->fecha = $request->fecha;
        $PlanillaUpdate->observacion = $request->observacion;
        $PlanillaUpdate->tipomovimiento_id = $request->input('tipomovimiento_id');
        $PlanillaUpdate->empleado_id = $request->input('empleado_id');

        $PlanillaUpdate->save();

        return redirect('mpplanillaingresoegreso')->with('mensaje', 'Planilla Ingreso/Egreso editada con exito!');

        }

      //baja
      public function baja($id){

        $PlanillaEliminar = Planilla::findOrFail($id);
        $PlanillaEliminar->delete();

        return redirect('mpplanillaingresoegreso')->with('mensaje', 'Planilla Ingreso/Egreso eliminada con exito!');
        }
}
