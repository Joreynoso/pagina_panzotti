<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Producto;
use App\Venta;
use App\ProductoVenta;
use App\Foto;

class ProductoVentaController extends Controller
{
    //leer
    public function leer(Request $request)
    {

        $buscar = $request->get('buscarpor');

        $tipo = $request->get('tipo');

        $variablesurl = $request->all();

        $productoventas = ProductoVenta::buscarpor($tipo, $buscar)
        ->clientepedido($buscar)
        ->paginate(5)
        ->appends($variablesurl);

        return view('panel.productoventa.productoventa', compact('productoventas'));
    }

    //acceder alta
    public function acceder()
    {
        $productos = Producto::all();
        $ventas = Venta::all();
        return view('panel.productoventa.productoventa_alta', compact('productos', 'ventas'));
    }

    //alta
    public function alta(Request $request)
    {

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
    public function editar($id)
    {
        $productoventa = ProductoVenta::findOrFail($id);

        $productos = Producto::all();
        $ventas = Venta::all();

        return view('panel.productoventa.productoventa_editar', compact('productoventa', 'productos', 'ventas'));
    }

    //update
    public function update(Request $request, $id)
    {

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
    public function baja($id)
    {
        $productoVentaEliminar = ProductoVenta::findOrFail($id);
        $productoVentaEliminar->delete();

        return redirect('productoventa')->with('mensaje', 'Producto Venta eliminado con exito!');
    }

      
    //PAGINA WEB
    //acceder venta-principal
    public function leerprincipal($id)
    {
        $producto = Producto::findOrFail($id);

        $id = $producto->id;

        $fotos = DB::select('SELECT * 
       FROM `fotos` 
       INNER JOIN productos 
       on fotos.producto_id = productos.id 
       where fotos.producto_id = '.$id);
        ;

        return view('pagina.venta-principal', compact('producto', 'fotos'));
    }

    //alta pedido
    public function pedido(Request $request)
    {

        //alta venta
        $request->validate([
            'fecha' => 'required'
        ]);

        $user_id = auth()->user()->id;

        $nuevaVenta = new Venta;

        $nuevaVenta->fecha = $request->input('fecha');
        $nuevaVenta->user_id = $request->user_id = $user_id;

        $nuevaVenta->save();

        //alta pedido
        $cantidad = $request->input('cantidad');
        $precio = $request->input('precio');
        $producto_id = $request->input('id');

        $total = $precio * $cantidad;

        $nuevoPedido = new ProductoVenta;

        $nuevoPedido->peso = $request->input('cantidad');
        $nuevoPedido->monto = $request->monto = $total;
        $nuevoPedido->producto_id = $request->producto_id = $producto_id;
        $nuevoPedido->venta_id = $request->venta_id = $nuevaVenta->id;

        $nuevoPedido->save();
        
        return redirect('carrito-compra');
    }

    public function leercarrito()
    {
        
        $user_registrado = auth()->user()->id;

        $pedido = DB::table('ventas')
        ->join('producto_ventas', 'ventas.id', '=', 'producto_ventas.venta_id')
        ->join('productos', 'productos.id', '=', 'producto_ventas.producto_id')
        ->join('fotos', 'fotos.id', '=', 'producto_ventas.producto_id')
        ->join('users', 'users.id', '=', 'ventas.user_id')
        ->where('users.id', '=', $user_registrado)
        ->where('producto_ventas.estado', '=', '0')
        ->select(
            'ventas.fecha as fechaEntrega',
            'producto_ventas.id as id',
            'productos.nombre as nombre',
            'productos.id as codigo',
            'producto_ventas.peso as peso',
            'producto_ventas.monto as monto',
            'users.name as nombreCliente',
            'fotos.ruta as ruta'
        )->get();

        $total = DB::table('ventas')
        ->join('producto_ventas', 'ventas.id', '=', 'producto_ventas.venta_id')
        ->join('productos', 'productos.id', '=', 'producto_ventas.producto_id')
        ->join('users', 'users.id', '=', 'ventas.user_id')
        ->where('users.id', '=', $user_registrado)
        ->where('producto_ventas.estado', '=', '0')
        ->select(DB::raw('SUM(producto_ventas.monto) as total'))->get();

        return view('pagina.carrito-compra', compact('pedido', 'total'));
    }

    //baja desde carrito
    public function baja2($id)
    {
        $productoVentaEliminar = ProductoVenta::findOrFail($id);
        $productoVentaEliminar->delete();
    
        return redirect('carrito-compra');
    }

    public function ConfirmarCompra(){

        $user_registrado = auth()->user()->id;

        $estado = 1;

        $pedido = DB::table('ventas')
        ->join('producto_ventas', 'ventas.id', '=', 'producto_ventas.venta_id')
        ->join('productos', 'productos.id', '=', 'producto_ventas.producto_id')
        ->join('fotos', 'fotos.id', '=', 'producto_ventas.producto_id')
        ->join('users', 'users.id', '=', 'ventas.user_id')
        ->where('users.id', '=', $user_registrado)
        ->where('producto_ventas.estado', '=', '0')
        ->update([
            'producto_ventas.estado' => $estado,
        ]);

        return redirect('productoWeb')->with('mensaje', 'Su compra se registro con exito!');

    }

}
