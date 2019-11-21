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

        return view('panel.materiaprima', compact('materiaprimas'));
    }

    //acceder alta
    public function acceder()
    {
        $tipomateriaprimas = TipoMateriaPrima::all();

        $proveedores = Proveedor::all();

        return view('panel.materiaprima_alta', compact('tipomateriaprimas', 'proveedores'));
    }

    //alta
    public function alta(Request $request) {
        
        //return $request->all();

        $nuevaMateriaPrima = new MateriaPrima;

        $nuevaMateriaPrima->nombre = $request->nombre;
        $nuevaMateriaPrima->tipomateriaprima_id = $request->input('tipomateriaprima_id');
        $nuevaMateriaPrima->proveedor_id = $request->input('proveedor_id');

        $nuevaMateriaPrima->save();

        return redirect('materiaprima')->with('mensaje', 'Materia Prima agregado con exito!');
    }

}