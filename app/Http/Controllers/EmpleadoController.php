<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
    //leer
    public function leer(){
        $empleados = Empleado::paginate(5);

        return view('panel.empleado.empleado', compact('empleados'));
    }


    //acceder alta
    public function acceder(){

        return view('panel.empleado.empleado_alta');
    }

    //alta
    public function alta(Request $request){

        //return $request->all();  verificar los datos antes de almacenarlos

        //validacion
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'fingreso' => 'required',
            'observaciones' => 'required'
        ]);

        $nuevoEmpleado = new Empleado;

        $nuevoEmpleado->nombre = $request->nombre;
        $nuevoEmpleado->apellido = $request->apellido;
        $nuevoEmpleado->direccion = $request->direccion;
        $nuevoEmpleado->fingreso = $request->fingreso;
        $nuevoEmpleado->observaciones = $request->observaciones;

        $nuevoEmpleado->save();

        return redirect('empleado')->with('mensaje', 'Empleado agregado con exito!');
    }

     //acceder editar
     public function editar($id){

        $empleado = Empleado::findOrFail($id);

        return view('panel.empleado.empleado_editar',compact('empleado'));
    }

    //update
    public function update(Request $request, $id){

        //validacion
        $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'direccion' => 'required',
        'fingreso' => 'required',
        'observaciones' => 'required'
        ]);

        $empleadoUpdate = Empleado::findOrFail($id);

        $empleadoUpdate->nombre = $request->nombre;
        $empleadoUpdate->apellido = $request->apellido;
        $empleadoUpdate->direccion = $request->direccion;
        $empleadoUpdate->fingreso = $request->fingreso;
        $empleadoUpdate->observaciones = $request->observaciones;

        $empleadoUpdate->save();

        return redirect('empleado')->with('mensaje', 'Empleado actualizado con exito!');
    }

    //baja
    public function baja($id){

        $empleadoEliminar = Empleado::findOrFail($id);
        $empleadoEliminar->delete();

        return redirect('empleado')->with('mensaje', 'Empleado eliminado con exito!');
    }
}
