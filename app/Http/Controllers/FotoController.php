<?php

namespace App\Http\Controllers;

use Image;
use Illuminate\Http\Request;
use App\Foto;
use App\Producto;

class FotoController extends Controller
{
    //leer
    public function leer()
    {
        $fotos = Foto::paginate(5);

        return view('panel.foto', compact('fotos'));
    }

    //acceder alta
    public function acceder()
    {
        $productos = Producto::all();

        return view('panel.foto_alta', compact('productos'));
    }

    //alta
    public function alta(Request $request) {


        $request->validate([
            'ruta' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->ruta->extension();

        $request->ruta->move(public_path('/img/'), $imageName);


        // //return $request->all();

        // // ruta de las imagenes guardadas
        // $ruta = public_path().'/img/';

        // // recogida del form
        // $imagenOriginal = $request->file('ruta');

        // // crear instancia de imagen
        // $imagen = Image::make($imagenOriginal);

        // //generar un nombre para la imagen
        // $name = time().$imagenOriginal->getClientOriginalName();

        // $imagen->resize(300,300);

        // // guardar imagen
        // // save( [ruta], [calidad])
        // $imagen->save($ruta . $name, 100);

        $nuevaFoto = new Foto;

        $nuevaFoto->ruta =$imageName;
        $nuevaFoto->producto_id = $request->input('producto_id');

        $nuevaFoto->save();

        return redirect('foto')->with('mensaje', 'Foto agregada con exito!');
    }

     //acceder editar
     public function editar($id){

        $foto = Foto::findOrFail($id);

        $productos = Producto::all();

        return view('panel.foto_editar',compact('foto','productos'));
    }

       //update
       public function update(Request $request, $id){

        //validacion
        $request->validate([
            'ruta' => 'required'
        ]);

        $fotoUpdate = new Foto;

        $fotoUpdate->ruta = $request->ruta;
        $fotoUpdate->producto_id = $request->input('producto_id');


        $fotoUpdate->save();

        return redirect('foto')->with('mensaje', 'Foto  editada con exito!');

    }

      //baja
      public function baja($id){

        $fotoEliminar = Foto::findOrFail($id);
        $fotoEliminar->delete();

        return redirect('foto')->with('mensaje', 'Foto eliminada con exito!');
    }
}
