<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use App\Cliente;

class VentaController extends Controller
{
    //leer
    public function leer()
    {
        $ventas = Venta::paginate(5);

        return view('panel.venta.venta', compact('ventas'));
    }

    //acceder alta
    public function acceder()
    {
        $clientes = Cliente::all();

        return view('panel.venta.venta_alta', compact('clientes'));
    }

    //alta
    public function alta(Request $request) {

        //return $request->all();

        //validacion
        $request->validate([
            'fecha' => 'required',
            'montototal' => 'required'
        ]);

        $nuevaVenta = new Venta;

        $nuevaVenta->fecha = $request->fecha;
        $nuevaVenta->montototal = $request->montototal;
        $nuevaVenta->cliente_id = $request->input('cliente_id');


        $nuevaVenta->save();

        return redirect('venta')->with('mensaje', 'Venta agregada con exito!');
    }

     //acceder editar
     public function editar($id){

        $venta = Venta::findOrFail($id);

        $clientes = Cliente::all();

        return view('panel.venta.venta_editar',compact('venta','clientes'));
    }

       //update
       public function update(Request $request, $id){

        //validacion
        $request->validate([
            'fecha' => 'required',
            'montototal' => 'required'
        ]);

        $VentaUpdate = new Venta;

        $VentaUpdate->fecha = $request->fecha;
        $VentaUpdate->montototal = $request->montototal;
        $VentaUpdate->cliente_id = $request->input('cliente_id');


        $VentaUpdate->save();

        return redirect('venta')->with('mensaje', 'Venta editada con exito!');

    }

      //baja
      public function baja($id){

        $VentaEliminar = Venta::findOrFail($id);
        $VentaEliminar->delete();

        return redirect('venta')->with('mensaje', 'Venta eliminada con exito!');
    }

}
