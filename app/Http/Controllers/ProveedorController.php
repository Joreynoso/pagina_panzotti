<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class ProveedorController extends Controller
{
    //leer
    public function leer(){

        $proveedores = Proveedor::paginate(5);

        return view('panel.proveedor.proveedor', compact('proveedores'));
    }

    //acceder alta
    public function acceder(){

        return view('panel.proveedor.proveedor_alta');
    }

    //alta
    public function alta(Request $request){

        //return $request->all();  verificar los datos antes de almacenarlos

        //validacion
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'tel' => 'required',
            'cuit' => 'required',
            'mail' => 'required'
        ]);

        $nuevoProveedor = new Proveedor;

        $nuevoProveedor->nombre = $request->nombre;
        $nuevoProveedor->direccion = $request->direccion;
        $nuevoProveedor->tel = $request->tel;
        $nuevoProveedor->cuit = $request->cuit;
        $nuevoProveedor->mail = $request->mail;

        $nuevoProveedor->save();

        return redirect('proveedor')->with('mensaje', 'Proveedor agregado con exito!');
    }

    //acceder editar
    public function editar($id){

        $proveedor = Proveedor::findOrFail($id);

        return view('panel.proveedor.proveedor_editar',compact('proveedor'));
    }

    //update
    public function update(Request $request, $id){

        //validacion
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'tel' => 'required',
            'cuit' => 'required',
            'mail' => 'required'
        ]);

        $proveedorUpdate = Proveedor::findOrFail($id);

        $proveedorUpdate->nombre = $request->nombre;
        $proveedorUpdate->direccion = $request->direccion;
        $proveedorUpdate->tel = $request->tel;
        $proveedorUpdate->cuit = $request->cuit;
        $proveedorUpdate->mail = $request->mail;

        $proveedorUpdate->save();

        return redirect('proveedor')->with('mensaje', 'Proveedor actualizado con exito!');
    }

    //baja
    public function baja($id){

        $proveedorEliminar = Proveedor::findOrFail($id);
        $proveedorEliminar->delete();

        return redirect('proveedor')->with('mensaje', 'Proveedor eliminado con exito!');
    }

}
