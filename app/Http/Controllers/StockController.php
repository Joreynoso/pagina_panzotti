<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\MateriaprimaPlanilla;
use App\MateriaprimaReceta;

class StockController extends Controller
{
     //leer
     public function leer()
     {
         $stocks = Stock::paginate(5);
         $materiaprimaplanillas = MateriaprimaPlanilla::all();
         $materiaprimarecetas = MateriaprimaReceta::all();

         return view('panel.stock.stock', compact('stocks','materiaprimarecetas','materiaprimaplanillas'));
     }

     //acceder alta
     public function acceder()
     {
         $materiaprimaplanillas = MateriaprimaPlanilla::all();
         $materiaprimarecetas = MateriaprimaReceta::all();

         return view('panel.stock.stock_alta', compact('materiaprimaplanillas','materiaprimarecetas'));
     }

     //alta
     public function alta(Request $request) {

         //return $request->all();

         //validacion
         $request->validate([
             'cantidad' => 'required',
             'fecha' => 'required'
         ]);

         $nuevoStock = new Stock;

         $nuevoStock->cantidad = $request->cantidad;
         $nuevoStock->fecha = $request->fecha;
         $nuevoStock->materiaprimaplanilla_id = $request->input('materiaprimaplanilla_id');
         $nuevoStock->materiaprimareceta_id = $request->input('materiaprimareceta_id');

         $nuevoStock->save();

         return redirect('stock')->with('mensaje', 'Nuevo Stock agregado con exito!');
     }

      //acceder editar
      public function editar($id){

         $stock = Stock::findOrFail($id);

         $materiaprimaplanillas = MateriaprimaPlanilla::all();
         $materiaprimarecetas = MateriaprimaReceta::all();

         return view('panel.stock.stock_editar',compact('stock','materiaprimaplanillas','materiaprimarecetas'));
     }

        //update
        public function update(Request $request, $id){

        //validacion
        $request->validate([
            'cantidad' => 'required',
            'fecha' => 'required'
        ]);

        $StockUpdate = new Stock;

        $StockUpdate->cantidad = $request->cantidad;
        $StockUpdate->fecha = $request->fecha;
        $StockUpdate->materiaprimaplanilla_id = $request->input('materiaprimaplanilla_id');
        $StockUpdate->materiaprimareceta_id = $request->input('materiaprimareceta_id');

        $StockUpdate->save();

         return redirect('stock')->with('mensaje', 'Stock editado con exito!');

     }

       //baja
       public function baja($id){

         $StockEliminar = Stock::findOrFail($id);
         $StockEliminar->delete();

         return redirect('stock')->with('mensaje', 'Stock eliminado con exito!');
     }


}
