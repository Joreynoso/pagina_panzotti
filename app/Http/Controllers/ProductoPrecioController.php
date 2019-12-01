<?php

namespace App\Http\Controllers;

use App\ProductoPrecio;
use App\Producto;
use Illuminate\Http\Request;

class ProductoPrecioController extends Controller
{
     //leer
     public function leer()
     {
         $productoprecios = ProductoPrecio::paginate(5);

         return view('panel.productoprecio.productoprecio', compact('productoprecios'));
     }

     //acceder alta
     public function acceder()
     {
         $productos = Producto::all();

         return view('panel.productoprecio.productoprecio_alta', compact('productos'));
     }

     //alta
     public function alta(Request $request) {

         //return $request->all();

         //validacion
         $request->validate([
             'fecha' => 'required',
             'precio' => 'required'
         ]);

         $nuevaProductoPrecio = new ProductoPrecio;

         $nuevaProductoPrecio->fecha = $request->fecha;
         $nuevaProductoPrecio->precio = $request->precio;
         $nuevaProductoPrecio->producto_id = $request->input('producto_id');


         $nuevaProductoPrecio->save();

         return redirect('productoprecio')->with('mensaje', 'Producto  Precio agregado con exito!');
     }

      //acceder editar
      public function editar($id){

         $productoprecio = ProductoPrecio::findOrFail($id);

         $productos = Producto::all();

         return view('panel.productoprecio.productoprecio_editar',compact('productoprecio','productos'));
     }

        //update
        public function update(Request $request, $id){

         //validacion
         $request->validate([
            'fecha' => 'required',
            'precio' => 'required'
        ]);

        $ProductoPrecioUpdate = new ProductoPrecio;

        $ProductoPrecioUpdate->fecha = $request->fecha;
        $ProductoPrecioUpdate->precio = $request->precio;
        $ProductoPrecioUpdate->producto_id = $request->input('producto_id');


        $ProductoPrecioUpdate->save();

         return redirect('productoprecio')->with('mensaje', 'Producto Precio editada con exito!');

     }

       //baja
       public function baja($id){

         $productoprecioEliminar = ProductoPrecio::findOrFail($id);
         $productoprecioEliminar->delete();

         return redirect('productoprecio')->with('mensaje', 'Producto Precio eliminado con exito!');
     }
}
