<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoMovimiento;

class TipoMovimientoController extends Controller
{
    //leer
    public function leer(){
        $tipomovimientos = TipoMovimiento::paginate(5);

        return view('panel.tipomov.tipomov', compact('tipomovimientos'));
    }

    //acceder alta
    public function acceder(){

        return view('panel.tipomov.tipomov_alta');
    }

    //alta
    public function alta(Request $request){

        //return $request->all();  verificar los datos antes de almacenarlos

        //validacion
        $request->validate([
            'nombre' => 'required'
        ]);

        $nuevomovimiento = new TipoMovimiento;

        $nuevomovimiento->nombre = $request->nombre;

        $nuevomovimiento->save();

        return redirect('tipomov')->with('mensaje', 'Tipo Movimiento agregado con exito!');
    }

    //acceder editar
    public function editar($id){

        $tipomovimiento = TipoMovimiento::findOrFail($id);

        return view('panel.tipomov.tipomov_editar',compact('tipomovimiento'));
    }

    //update
    public function update(Request $request, $id){

        //validacion
        $request->validate([
            'nombre' => 'required'
        ]);

        $tipomovimiento = TipoMovimiento::findOrFail($id);

        $tipomovimiento->nombre = $request->nombre;

        $tipomovimiento->save();

        return redirect('tipomov')->with('mensaje', 'Tipo Movimiento actualizado con exito!');
    }

    //baja
    public function baja($id){

        $tipomovimientoEliminar= TipoMovimiento::findOrFail($id);
        $tipomovimientoEliminar->delete();

        return redirect('tipomov')->with('mensaje', 'Tipo Movimiento eliminado con exito!');
    }

}
