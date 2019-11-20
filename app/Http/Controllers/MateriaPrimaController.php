<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\MateriaPrima;
use App\Proveedor;

class MateriaPrimaController extends Controller
{
     //leer
     public function leer()
     {
         $materiaprimas = MateriaPrima::paginate(5);

         return view('panel.materiaprima', compact('materiaprimas'));
     }

    //acceder alta
    public function acceder(){

        return view('panel.materiaprima_alta');
    }

    //alta
    public function alta(Request $request){

        //return $request->all();  verificar los datos antes de almacenarlos

        //validacion
        $request->validate([
            'nombre' => 'required',
        ]);

        $nuevamateriaprima = new Cliente;

        $nuevamateriaprima->nombre = $request->nombre;
        $nuevamateriaprima->apellido = $request->apellido;
        $nuevamateriaprima->domicilio = Proveedor()->id;
        $nuevamateriaprima->tel = $request->tel;

        $nuevamateriaprima->save();

        return redirect('cliente')->with('mensaje', 'Cliente agregado con exito!');
    }
}
