<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Venta;
use App\ProductoVenta;

class ProductoVentaController extends Controller
{
    //leer
    public function leer()
    {
        $productoventas = ProductoVenta::paginate(5);

        return view('panel.productoventa.productoventa', compact('productoventas'));
    }

    //acceder alta
    public function acceder()
    {
        $productos = Producto::all();
        $ventas = Venta::all();
        return view('panel.productoventa.productoventa_alta', compact('productos','ventas'));
    }

    //alta
    public function alta(Request $request) {

        //return $request->all();

        //validacion
        $request->validate([
            'peso' => 'required',
            'monto' => 'required'
        ]);

        $nuevaProductoVenta = new ProductoVenta;

        $nuevaProductoVenta->peso = $request->peso;
        $nuevaProductoVenta->monto = $request->monto;
        $nuevaProductoVenta->producto_id = $request->input('producto_id');
        $nuevaProductoVenta->venta_id = $request->input('venta_id');


        $nuevaProductoVenta->save();

        return redirect('productoventa')->with('mensaje', 'Producto Venta agregado con exito!');
    }

     //acceder editar
     public function editar($id){

        $productoventa = ProductoVenta::findOrFail($id);

        $productos = Producto::all();
        $ventas = Venta::all();

        return view('panel.productoventa.productoventa_editar',compact('productoventa','productos','ventas'));
    }

       //update
       public function update(Request $request, $id){

        //validacion
        $request->validate([
           'peso' => 'required',
           'monto' => 'required'
       ]);

       $ProductoVentaUpdate = new ProductoVenta;

       $ProductoVentaUpdate->peso = $request->peso;
       $ProductoVentaUpdate->monto = $request->monto;
       $ProductoVentaUpdate->producto_id = $request->input('producto_id');
       $ProductoVentaUpdate->venta_id = $request->input('venta_id');


       $ProductoVentaUpdate->save();

        return redirect('productoventa')->with('mensaje', 'Producto Venta editada con exito!');

    }

      //baja
      public function baja($id){

        $productoVentaEliminar = ProductoVenta::findOrFail($id);
        $productoVentaEliminar->delete();

        return redirect('productoventa')->with('mensaje', 'Producto Venta eliminado con exito!');
    }
}