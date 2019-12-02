<?php

//--------------------------------------------------------------------------
// Pagina web panzotti pastas
//--------------------------------------------------------------------------


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//--------------------------------------------------------------------------
// Panel administracion
//--------------------------------------------------------------------------

// principal
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/principal', 'AdminController@mostrar')->name('principal');


// notas
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/notas', 'NotaController@leer')->name('notas');

Route::get('/nota_alta', 'NotaController@acceder')->name('nota_alta');

Route::post('/altaNota', 'NotaController@alta')->name('altaNota');

Route::delete('/bajaNota/{id}', 'NotaController@baja')->name('bajaNota');


// cliente
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/cliente', 'ClienteController@leer')->name('cliente');

Route::get('/cliente_alta', 'ClienteController@acceder')->name('cliente_alta');

Route::post('/altaCliente', 'ClienteController@alta')->name('altaCliente');

Route::get('/cliente_editar/{id}', 'ClienteController@editar')->name('editarCliente');

Route::put('/cliente_editar/{id}', 'ClienteController@update')->name('updateCliente');

Route::delete('/bajaCliente/{id}', 'ClienteController@baja')->name('bajaCliente');

Route::get('/clientespdf', 'ClienteController@exporPdf')->name('clientespdf');


// comentario
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/comentario', 'ComentarioController@mostrar')->name('comentario');

Route::get('/comentario', 'ComentarioController@leer')->name('comentario');


// tipomovimiento
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/tipomov', 'TipoMovimientoController@leer')->name('tipomov');

Route::get('/tipomov_alta', 'TipoMovimientoController@acceder')->name('tipomov_alta');

Route::post('/altaTipomov', 'TipoMovimientoController@alta')->name('altaTipomov');

Route::get('/tipomov_editar/{id}', 'TipoMovimientoController@editar')->name('editarTipomov');

Route::put('/tipomov_editar/{id}', 'TipoMovimientoController@update')->name('updateTipomov');

Route::delete('/bajaTipomov/{id}', 'TipoMovimientoController@baja')->name('bajaTipomov');


// proveedor
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/proveedor', 'ProveedorController@leer')->name('proveedor');

Route::get('/proveedor_alta', 'ProveedorController@acceder')->name('proveedor_alta');

Route::post('/altaProveedor', 'ProveedorController@alta')->name('altaProveedor');

Route::get('/proveedor_editar/{id}', 'ProveedorController@editar')->name('proveedor_editar');

Route::put('/updateProveedor/{id}', 'ProveedorController@update')->name('updateProveedor');

Route::delete('/bajaProveedor/{id}', 'ProveedorController@baja')->name('bajaProveedor');


// empleado
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/empleado', 'EmpleadoController@leer')->name('empleado');

Route::get('/empleado_alta', 'EmpleadoController@acceder')->name('empleado_alta');

Route::post('/altaEmpleado', 'EmpleadoController@alta')->name('altaEmpleado');

Route::get('/empleado_editar/{id}', 'EmpleadoController@editar')->name('editarEmpleado');

Route::put('/proveedor_editar/{id}', 'EmpleadoController@update')->name('updateEmpleado');

Route::delete('/bajaEmpleado/{id}', 'EmpleadoController@baja')->name('bajaEmpleado');


// tipomateriaprima
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/tipomp', 'TipoMateriaPrimaController@leer')->name('tipomp');

Route::get('/tipomp_alta', 'TipoMateriaPrimaController@acceder')->name('tipomp_alta');

Route::post('/altaTipomp', 'TipoMateriaPrimaController@alta')->name('altaTipomp');

Route::get('/tipomp_editar/{id}', 'TipoMateriaPrimaController@editar')->name('editarTipomp');

Route::put('/tipomp_editar/{id}', 'TipoMateriaPrimaController@update')->name('updateTipomp');

Route::delete('/bajaTipomp/{id}', 'TipoMateriaPrimaController@baja')->name('bajaTipomp');


// materiaprima
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/materiaprima', 'MateriaPrimaController@leer')->name('materiaprima');

Route::get('/materiaprima_alta', 'MateriaPrimaController@acceder')->name('materiaprima_alta');

Route::post('/altaMateriaPrima', 'MateriaPrimaController@alta')->name('altaMateriaPrima');

Route::get('/materiaprima_editar/{id}', 'MateriaPrimaController@editar')->name('editarMateriaPrima');

Route::put('/materiaprima_editar/{id}', 'MateriaPrimaController@update')->name('updateMateriaPrima');

Route::delete('/bajaMateriaPrima/{id}', 'MateriaPrimaController@baja')->name('bajaMateriaPrima');


// planilla ingreso/egreso
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/mpplanillaingresoegreso', 'MPPlanillaIngresoEgresoController@leer')->name('mpplanillaingresoegresos');

Route::get('/mpplanillaingresoegreso_alta', 'MPPlanillaIngresoEgresoController@acceder')->name('mpplanillaingresoegresos_alta');

Route::post('/altampplanillaingresoegreso', 'MPPlanillaIngresoEgresoController@alta')->name('altampplanillaingresoegresos');

Route::get('/mpplanillaingresoegreso_editar/{id}', 'MPPlanillaIngresoEgresoController@editar')->name('editarmpplanillaingresoegresos');

Route::put('/mpplanillaingresoegreso_editar/{id}', 'MPPlanillaIngresoEgresoController@update')->name('updatempplanillaingresoegresos');

Route::delete('/bajampplanillaingresoegreso/{id}', 'MPPlanillaIngresoEgresoController@baja')->name('bajampplanillaingresoegresos');


// receta
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/receta', 'RecetaController@leer')->name('receta');

Route::get('/receta_alta', 'RecetaController@acceder')->name('receta_alta');

Route::post('/altaReceta', 'RecetaController@alta')->name('altaReceta');

Route::get('/receta_editar/{id}', 'RecetaController@editar')->name('editarReceta');

Route::put('/receta_editar/{id}', 'RecetaController@update')->name('updateReceta');

Route::delete('/bajaReceta/{id}', 'RecetaController@baja')->name('bajaReceta');


// producto
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/producto', 'ProductoController@leer')->name('producto');

Route::get('/producto_alta', 'ProductoController@acceder')->name('producto_alta');

Route::post('/altaProducto', 'ProductoController@alta')->name('altaProducto');

Route::get('/producto_editar/{id}', 'ProductoController@editar')->name('editarProducto');

Route::put('/producto_editar/{id}', 'ProductoController@update')->name('updateProducto');

Route::delete('/bajaProducto/{id}', 'ProductoController@baja')->name('bajaProducto');


// materiaprima
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/foto', 'FotoController@leer')->name('foto');

Route::get('/foto_alta', 'FotoController@acceder')->name('foto_alta');

Route::post('/altaFoto', 'FotoController@alta')->name('altaFoto');

Route::get('/foto_editar/{id}', 'FotoController@editar')->name('editarFoto');

Route::put('/foto_editar/{id}', 'FotoController@update')->name('updateFoto');

Route::delete('/bajaFoto/{id}', 'FotoController@baja')->name('bajaFoto');

// Producto Precio
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/productoprecio', 'ProductoPrecioController@leer')->name('productoprecio');

Route::get('/productoprecio_alta', 'ProductoPrecioController@acceder')->name('productoprecio_alta');

Route::post('/altaProductoPrecio', 'ProductoPrecioController@alta')->name('altaProductoPrecio');

Route::get('/productoprecio_editar/{id}', 'ProductoPrecioController@editar')->name('editarProductoPrecio');

Route::put('/productoprecio_editar/{id}', 'ProductoPrecioController@update')->name('updateProductoPrecio');

Route::delete('/bajaProductoPrecio/{id}', 'ProductoPrecioController@baja')->name('bajaProductoPrecio');

// Venta
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/venta', 'VentaController@leer')->name('venta');

Route::get('/venta_alta', 'VentaController@acceder')->name('venta_alta');

Route::post('/altaVenta', 'VentaController@alta')->name('altaVenta');

Route::get('/venta_editar/{id}', 'VentaController@editar')->name('editarVenta');

Route::put('/venta_editar/{id}', 'VentaController@update')->name('updateVenta');

Route::delete('/bajaVenta/{id}', 'VentaController@baja')->name('bajaVenta');

// Producto-Venta
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/productoventa', 'ProductoVentaController@leer')->name('productoventa');

Route::get('/productoventa_alta', 'ProductoVentaController@acceder')->name('productoventa_alta');

Route::post('/altaProductoVenta', 'ProductoVentaController@alta')->name('altaProductoVenta');

Route::get('/productoventa_editar/{id}', 'ProductoVentaController@editar')->name('editarProductoVenta');

Route::put('/productoventa_editar/{id}', 'ProductoVentaController@update')->name('updateProductoVenta');

Route::delete('/bajaProductoVenta/{id}', 'ProductoVentaController@baja')->name('bajaProductoVenta');

// Materia Prima-Receta
// ────────────────────────────────────────────────────────────────────────────────
Route::get('/materiaprimareceta', 'MateriaprimaRecetaController@leer')->name('materiaprimareceta');

Route::get('/materiaprimareceta_alta', 'MateriaprimaRecetaController@acceder')->name('materiaprimareceta_alta');

Route::post('/altaMateriaprimaReceta', 'MateriaprimaRecetaController@alta')->name('altaMateriaprimaReceta');

Route::get('/materiaprimareceta_editar/{id}', 'MateriaprimaRecetaController@editar')->name('editarMateriaprimaReceta');

Route::put('/materiaprimareceta_editar/{id}', 'MateriaprimaRecetaController@update')->name('updateMateriaprimaReceta');

Route::delete('/bajaMateriaprimaReceta/{id}', 'MateriaprimaRecetaController@baja')->name('bajaMateriaprimaReceta');



//--------------------------------------------------------------------------
// Pagina Principal Panzotti
//--------------------------------------------------------------------------
Route::get('/productoWeb', 'ProductoController@leerWeb')->name('productoWeb');

Route::get('/venta-principal', 'VentaController@leerprincipal')->name('venta-principal');

Route::get('/receta-principal', 'RecetaController@leerprincipal')->name('receta-principal');


