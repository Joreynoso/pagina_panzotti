<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MateriaPrima;
use App\Proveedor;
use App\TipoMateriaPrima;

class MateriaPrimaController extends Controller
{
    //leer
    public function leer()
    {
        $materiaprimas = MateriaPrima::paginate(5);

        return view('panel.materiaprima.materiaprima', compact('materiaprimas'));
    }

    //acceder alta
    public function acceder()
    {
        $tipomateriaprimas = TipoMateriaPrima::all();

        $proveedores = Proveedor::all();

        return view('panel.materiaprima.materiaprima_alta', compact('tipomateriaprimas', 'proveedores'));
    }

    //alta
    public function alta(Request $request) {

        //return $request->all();

        //validacion
        $request->validate([
            'nombre' => 'required'
        ]);

        $nuevaMateriaPrima = new MateriaPrima;

        $nuevaMateriaPrima->nombre = $request->nombre;
        $nuevaMateriaPrima->tipomateriaprima_id = $request->input('tipomateriaprima_id');
        $nuevaMateriaPrima->proveedor_id = $request->input('proveedor_id');

        $nuevaMateriaPrima->save();

        return redirect('materiaprima')->with('mensaje', 'Materia Prima agregado con exito!');
    }

     //acceder editar
     public function editar($id){

        $materiaprima = MateriaPrima::findOrFail($id);

        $tipomateriaprimas = TipoMateriaPrima::all();

        $proveedores = Proveedor::all();

        return view('panel.materiaprima.materiaprima_editar',compact('materiaprima','tipomateriaprimas', 'proveedores'));
    }

       //update
       public function update(Request $request, $id){

        //validacion
        $request->validate([
            'nombre' => 'required'
        ]);

        $materiaprimaUpdate = MateriaPrima::findOrFail($id);

        $materiaprimaUpdate->nombre = $request->nombre;
        $materiaprimaUpdate->tipomateriaprima_id = $request->input('tipomateriaprima_id');
        $materiaprimaUpdate->proveedor_id = $request->input('proveedor_id');

        $materiaprimaUpdate->save();

        return redirect('materiaprima')->with('mensaje', 'Materia Prima editada con exito!');

    }

      //baja
      public function baja($id){

        $materiaprimaEliminar = MateriaPrima::findOrFail($id);
        $materiaprimaEliminar->delete();

        return redirect('materiaprima')->with('mensaje', 'Materia Prima eliminada con exito!');
    }

}
