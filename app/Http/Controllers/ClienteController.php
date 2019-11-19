<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Cliente;

class ClienteController extends Controller
{
    //leer
    public function leer()
    {
        $clientes = Cliente::paginate(5);

        return view('panel.cliente', compact('clientes'));
    }

    //acceder alta
    public function acceder(){

        return view('panel.cliente_alta');
    }
    
    //alta
    public function alta(Request $request){

        //return $request->all();  verificar los datos antes de almacenarlos

        //validacion
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'domicilio' => 'required',
            'tel' => 'required'
        ]);

        $nuevocliente = new Cliente;

        $nuevocliente->nombre = $request->nombre;
        $nuevocliente->apellido = $request->apellido;
        $nuevocliente->domicilio = $request->domicilio;
        $nuevocliente->tel = $request->tel;

        $nuevocliente->save();

        return redirect('cliente')->with('mensaje', 'Cliente agregado con exito!');
    }

    //acceder editar
    public function editar($id){

        $cliente = Cliente::findOrFail($id);

        return view('panel.cliente_editar',compact('cliente'));
    }

    //update
    public function update(Request $request, $id){

        //validacion
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'domicilio' => 'required',
            'tel' => 'required'
        ]);

        $clienteUpdate = Cliente::findOrFail($id);

        $clienteUpdate->nombre = $request->nombre;
        $clienteUpdate->apellido = $request->apellido;
        $clienteUpdate->domicilio = $request->domicilio;
        $clienteUpdate->tel = $request->tel;

        $clienteUpdate->save();

        return redirect('cliente')->with('mensaje', 'Cliente actualizado con exito!');
    }

    //baja
    public function baja($id){

        $clienteEliminar = Cliente::findOrFail($id);
        $clienteEliminar->delete();

        return redirect('cliente')->with('mensaje', 'Cliente eliminado con exito!');
    }
    
}
