<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Planilla;
use App\TipoMovimiento;
use App\User;
use Carbon\Carbon;
use App\MateriaPrima;
use App\Nota;
use PDF;

class PlantillaController extends Controller
{


    //leer
    public function leer(Request $request){

        $buscar = $request->get('buscarpor');

        $tipo = $request->get('tipo');

        $variablesurl = $request->all();

        $planillas = Planilla::buscarpor($tipo, $buscar)
        ->paginate(5)
        ->appends($variablesurl);


        return view('panel.mpplanillaingresoegreso.mpplanillaingresoegreso', compact('planillas'));
    }

    //acceder alta
    public function acceder()
    {
        $tipomovimientos = TipoMovimiento::all();

        $materiaprimas = MateriaPrima::all();

        return view('panel.mpplanillaingresoegreso.mpplanillaingresoegreso_alta',
        compact('tipomovimientos', 'materiaprimas'));
    }

    //alta
    public function alta(Request $request) {

        //validacion
        $request->validate([
            'fecha' => 'required',
            'observacion' => 'required',
            'cantidad' => 'required'
        ]);

        $nuevaPlanilla = new Planilla();

        $cantidad = $request->input('cantidad');
        $movimiento = $request->input('tipomovimiento_id');

        //egreso
        if ($movimiento == 2) {

            $resultado = -$cantidad;

        //ingreso
        }else{

            $resultado = $cantidad;
        }

        $empleado_id = auth()->user()->id;

        $nuevaPlanilla->fecha = $request->fecha;
        $nuevaPlanilla->observacion = $request->observacion;
        $nuevaPlanilla->cantidad = $request->cantidad = $resultado;
        $nuevaPlanilla->tipomovimiento_id = $request->input('tipomovimiento_id');
        $nuevaPlanilla->user_id = $request->user_id = $empleado_id;
        $nuevaPlanilla->materiaprima_id = $request->input('materiaprima_id');

        //comprobar si la cantidad que egresa no es superior a la cantidad existente gorriao
        $stock = DB::table('materia_primas')
        ->join('planillas', 'materia_primas.id', '=', 'planillas.materiaprima_id')
        ->where('materia_primas.id', '=', $nuevaPlanilla->materiaprima_id)
        ->select(DB::raw('SUM(cantidad) as cantidad')
        ,'materia_primas.nombre as nombre')
        ->first();

        $total = $stock->cantidad;

        if ($total > 0) {

          return redirect('mpplanillaingresoegreso_alta')->with('mensaje', 'no se pudo realizar la
          operacion ya que la cantidad disponible de '.$stock->nombre.' es de: '.$stock->cantidad.' usted ingreso
           :'.$nuevaPlanilla->cantidad);

        }else{

          $nuevaPlanilla->save();

          return redirect('mpplanillaingresoegreso')->with('mensaje', 'movimiento realizado!');
        }
  
    }

     //acceder editar
     public function editar($id){

        $planillas = Planilla::findOrFail($id);

        $tipomovimientos = TipoMovimiento::all();


        return view('panel.mpplanillaingresoegreso.mpplanillaingresoegreso_editar',compact('planillas','tipomovimientos'));
    }

       //update
       public function update(Request $request, $id){

        //validacion
        $request->validate([
            'fecha' => 'required',
            'observacion' => 'required'
        ]);


        $PlanillaUpdate = new Planilla();

        $empleado_id = auth()->user()->id;

        $PlanillaUpdate->fecha = $request->fecha;
        $PlanillaUpdate->observacion = $request->observacion;
        $PlanillaUpdate->tipomovimiento_id = $request->input('tipomovimiento_id');
        $PlanillaUpdate->user_id = $request->user_id = $empleado_id;

        $PlanillaUpdate->save();

        return redirect('mpplanillaingresoegreso')->with('mensaje', 'Planilla Ingreso/Egreso editada con exito!');

    }

      //baja
      public function baja($id){


        $PlanillaEliminar = Planilla::findOrFail($id);
        $PlanillaEliminar->delete();

        return redirect('mpplanillaingresoegreso')->with('mensaje', 'Planilla Ingreso/Egreso eliminada con exito!');
        }

      public function stock(){

        $stock = DB::select('SELECT materia_primas.id, materia_primas.nombre, planillas.updated_at, sum(cantidad) as stock
        FROM `planillas`
        INNER JOIN materia_primas
        ON planillas.materiaprima_id = materia_primas.id
        GROUP BY materia_primas.nombre');

        return view('panel.mpplanillaingresoegreso.stock',['stock' => $stock]);
    }

      public function imprimir(){

        $today = Carbon::now()->format('d/m/Y');

        $stock = DB::select('SELECT materia_primas.id, materia_primas.nombre, planillas.updated_at, sum(cantidad) as stock
        FROM `planillas`
        INNER JOIN materia_primas
        ON planillas.materiaprima_id = materia_primas.id
        GROUP BY materia_primas.nombre');

        $pdf = \PDF::loadView('panel.mpplanillaingresoegreso.pdf_stock', compact('stock','today'));

        return $pdf->download('planilla_stock.pdf');

    }

      public function imprimir2(){

        $today = Carbon::now()->format('d/m/Y');

        $planillas = Planilla::all();

        $pdf = \PDF::loadView('panel.mpplanillaingresoegreso.pdf_planilla', compact('planillas','today'));

        return $pdf->download('planilla_ingresos_egresos_mp.pdf');

    }

    //alta
    public function notastock(Request $request){

      //validacion
      $request->validate([
          'descripcion' => 'required'
      ]);

      $nuevaNota = new Nota;

      $nuevaNota->descripcion = $request->descripcion;
      $nuevaNota->urgencia = $request->input('urgencia');

      $nuevaNota->save();

      return redirect('stock')->with('mensaje', 'Nueva Tarea agregada!');
  }

}
