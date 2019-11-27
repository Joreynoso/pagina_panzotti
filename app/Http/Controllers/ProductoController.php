<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Receta;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //leer
    public function leer()
    {
        $productos = Producto::paginate(5);

        return view('panel.producto', compact('productos'));
    }

    //acceder alta
    public function acceder()
    {
      $recetas = Receta::all();

        return view('panel.producto_alta', compact('recetas'));
    }

    //alta
    public function alta(Request $request) {

        //return $request->all();

        //validacion
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $nuevoProducto = new Producto;

        $nuevoProducto->nombre = $request->nombre;
        $nuevoProducto->descripcion = $request->descripcion;
        $nuevoProducto->receta_id = $request->input('receta_id');


        $nuevoProducto->save();

        return redirect('producto')->with('mensaje', 'Producto agregado con exito!');
    }

     //acceder editar
     public function editar($id){

        $producto = Producto::findOrFail($id);

        $recetas = Receta::all();

        return view('panel.producto_editar',compact('producto','recetas'));
    }

       //update
       public function update(Request $request, $id){

        //validacion
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $ProductoUpdate = new Producto;

        $ProductoUpdate->nombre = $request->nombre;
        $ProductoUpdate->descripcion = $request->descripcion;
        $ProductoUpdate->receta_id = $request->input('receta_id');

        $ProductoUpdate->save();

        return redirect('producto')->with('mensaje', 'Producto editado con exito!');

    }

      //baja
      public function baja($id){

        $productoEliminar = Producto::findOrFail($id);
        $productoEliminar->delete();

        return redirect('producto')->with('mensaje', 'Producto eliminado con exito!');
    }

    /*pagina web*/
    //leer producto web
    public function leerWeb()
    {
      
        return view('pagina.producto');
    }
}
