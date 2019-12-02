<?php

namespace App\Http\Controllers;

use App\MateriaPrima;
use App\MateriaprimaReceta;
use Illuminate\Http\Request;
use App\ProductoVenta;
use App\Producto;
use App\Receta;
use App\Venta;

class MateriaprimaRecetaController extends Controller
{
     //leer
     public function leer()
     {
         $materiaprimarecetas = MateriaprimaReceta::paginate(5);

         return view('panel.materiaprimareceta.materiaprimareceta', compact('materiaprimarecetas'));
     }

     //acceder alta
     public function acceder()
     {
         $materiaprimas = MateriaPrima::all();
         $recetas = Receta::all();
         return view('panel.materiaprimareceta.materiaprimareceta_alta', compact('materiaprimas','recetas'));
     }

     //alta
     public function alta(Request $request) {

         //return $request->all();

         //validacion
         $request->validate([
             'unidadmedida' => 'required'
         ]);

         $nuevaMateriaprimaReceta = new MateriaprimaReceta;

         $nuevaMateriaprimaReceta->unidadmedida = $request->unidadmedida;
         $nuevaMateriaprimaReceta->materiaprima_id = $request->input('materiaprima_id');
         $nuevaMateriaprimaReceta->receta_id = $request->input('receta_id');


         $nuevaMateriaprimaReceta->save();

         return redirect('materiaprimareceta')->with('mensaje', 'Materia Prima Receta agregado con exito!');
     }

      //acceder editar
      public function editar($id){

         $materiaprimareceta = MateriaprimaReceta::findOrFail($id);

         $materiaprimas = MateriaPrima::all();
         $recetas = Receta::all();

         return view('panel.materiaprimareceta.materiaprimareceta_editar',compact('materiaprimareceta','materiaprimas','recetas'));
     }

        //update
        public function update(Request $request, $id){

         //validacion
         $request->validate([
            'unidadmedida' => 'required'
        ]);

        $MateriaprimaRecetaUpdate = new MateriaprimaReceta;

        $MateriaprimaRecetaUpdate->unidadmedida = $request->unidadmedida;
        $MateriaprimaRecetaUpdate->materiaprima_id = $request->input('materiaprima_id');
        $MateriaprimaRecetaUpdate->receta_id = $request->input('receta_id');


        $MateriaprimaRecetaUpdate->save();

         return redirect('materiaprimareceta')->with('mensaje', 'Materia Prima Receta editada con exito!');

     }

       //baja
       public function baja($id){

         $MateriaprimaRecetaEliminar = MateriaprimaReceta::findOrFail($id);
         $MateriaprimaRecetaEliminar->delete();

         return redirect('materiaprimareceta')->with('mensaje', 'Materia Prima Receta eliminado con exito!');
     }
}
