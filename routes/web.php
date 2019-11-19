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

//principal
Route::get('/principal', 'AdminController@mostrar')->name('principal');

//cliente
Route::get('/cliente', 'ClienteController@leer')->name('cliente');

Route::get('/cliente_alta', 'ClienteController@acceder')->name('cliente_alta');

Route::post('/altaCliente', 'ClienteController@alta')->name('altaCliente');

Route::get('/cliente_editar/{id}', 'ClienteController@editar')->name('editarCliente');

Route::put('/cliente_editar/{id}', 'ClienteController@update')->name('updateCliente');

Route::delete('/bajaCliente/{id}', 'ClienteController@baja')->name('bajaCliente');

//comentario
Route::get('/comentario', 'ComentarioController@mostrar')->name('comentario');

Route::get('/comentario', 'ComentarioController@leer')->name('comentario');

//tipomovimiento
Route::get('/tipomov', 'TipoMovimientoController@leer')->name('tipomov');

Route::get('/tipomov_alta', 'TipoMovimientoController@acceder')->name('tipomov_alta');

Route::post('/altaTipomov', 'TipoMovimientoController@alta')->name('altaTipomov');

Route::get('/tipomov_editar/{id}', 'TipoMovimientoController@editar')->name('editarTipomov');

Route::put('/tipomov_editar/{id}', 'TipoMovimientoController@update')->name('updateTipomov');

Route::delete('/bajaTipomov/{id}', 'TipoMovimientoController@baja')->name('bajaTipomov');

//proveedor
Route::get('/proveedor', 'ProveedorController@leer')->name('proveedor');

Route::get('/proveedor_alta', 'ProveedorController@acceder')->name('proveedor_alta');

Route::post('/altaProveedor', 'ProveedorController@alta')->name('altaProveedor');

Route::get('/proveedor_editar/{id}', 'ProveedorController@editar')->name('editarProveedor');

Route::put('/proveedor_editar/{id}', 'ProveedorController@update')->name('updateProveedor');

Route::delete('/bajaProveedor/{id}', 'ProveedorController@baja')->name('bajaProveedor');

//empleado
Route::get('/empleado', 'EmpleadoController@leer')->name('empleado');

Route::get('/empleado_alta', 'EmpleadoController@acceder')->name('empleado_alta');

Route::post('/altaEmpleado', 'EmpleadoController@alta')->name('altaEmpleado');

Route::get('/empleado_editar/{id}', 'EmpleadoController@editar')->name('editarEmpleado');

Route::put('/proveedor_editar/{id}', 'EmpleadoController@update')->name('updateEmpleado');

Route::delete('/bajaEmpleado/{id}', 'EmpleadoController@baja')->name('bajaEmpleado');

//--------------------------------------------------------------------------
// Pagina Principal
//--------------------------------------------------------------------------



