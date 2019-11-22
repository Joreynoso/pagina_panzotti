<?php

namespace App\Http\Controllers;

use App\MPPlanillaIngresoEgreso;
use Illuminate\Http\Request;
use App\TipoMovimiento;
use App\Empleado;

class MPPlanillaIngresoEgresoController extends Controller
{
    //leer
    public function leer()
    {
        $mpplanillaingresoegresos = MPPlanillaIngresoEgreso::paginate(5);

        return view('panel.mpplanillaingresoegreso', compact('mpplanillaingresoegresos'));
    }

    //acceder alta
    public function acceder()
    {
        $tipomovimientos = TipoMovimiento::all();

        $empleados = Empleado::all();

        return view('panel.mpplanillaingresoegreso_alta', compact('tipomovimientos', 'empleados'));
    }

    //alta
    public function alta(Request $request) {

        //return $request->all();

        //validacion
        $request->validate([
            'fecha' => 'required',
            'observacion' => 'required'
        ]);

        $nuevaMPPlanillaIngresoEgreso = new MPPlanillaIngresoEgreso();

        $nuevaMPPlanillaIngresoEgreso->fecha = $request->fecha;
        $nuevaMPPlanillaIngresoEgreso->observacion = $request->observacion;
        $nuevaMPPlanillaIngresoEgreso->tipomovimiento_id = $request->input('tipomovimiento_id');
        $nuevaMPPlanillaIngresoEgreso->empleado_id = $request->input('empleado_id');

        $nuevaMPPlanillaIngresoEgreso->save();

        return redirect('mpplanillaingresoegreso')->with('mensaje', 'Planilla Ingreso/Egreso agregado con exito!');
    }

     //acceder editar
     public function editar($id){

        $mpplanillaingresoegresos = MPPlanillaIngresoEgreso::findOrFail($id);

        $tipomovimientos = TipoMovimiento::all();

        $empleados = Empleado::all();

        return view('panel.mpplanillaingresoegreso_editar',compact('mpplanillaingresoegresos','tipomovimientos', 'empleados'));
        }

       //update
       public function update(Request $request, $id){

        //validacion
        $request->validate([
            'fecha' => 'required',
            'observacion' => 'required'
        ]);


        $MPPlanillaIngresoEgresoUpdate = new MPPlanillaIngresoEgreso();

        $MPPlanillaIngresoEgresoUpdate->fecha = $request->fecha;
        $MPPlanillaIngresoEgresoUpdate->observacion = $request->observacion;
        $MPPlanillaIngresoEgresoUpdate->tipomovimiento_id = $request->input('tipomovimiento_id');
        $MPPlanillaIngresoEgresoUpdate->empleado_id = $request->input('empleado_id');

        $MPPlanillaIngresoEgresoUpdate->save();

        return redirect('mpplanillaingresoegreso')->with('mensaje', 'Planilla Ingreso/Egreso editada con exito!');

        }

      //baja
      public function baja($id){

        $MPPlanillaIngresoEgresoEliminar = MPPlanillaIngresoEgreso::findOrFail($id);
        $MPPlanillaIngresoEgresoEliminar->delete();

        return redirect('mpplanillaingresoegreso')->with('mensaje', 'Planilla Ingreso/Egreso eliminada con exito!');
        }
}
