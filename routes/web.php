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

Route::post('/', 'ClienteController@alta')->name('alta');

Route::get('/cliente_editar/{id}', 'ClienteController@editar')->name('editar');

Route::put('/cliente_editar/{id}', 'ClienteController@update')->name('update');

Route::delete('/baja/{id}', 'ClienteController@baja')->name('baja');

//comentario
Route::get('/comentario', 'ComentarioController@mostrar')->name('comentario');

Route::get('/comentario', 'ComentarioController@leer')->name('comentario');

//tipomovimiento
Route::get('/tipomov', 'TipoMovimientoController@leer')->name('tipomov');

Route::get('/tipomov_alta', 'TipoMovimientoController@acceder')->name('tipomov_alta');

Route::post('/', 'TipoMovimientoController@alta')->name('alta');

Route::get('/tipomov_editar/{id}', 'TipoMovimientoController@editar')->name('editar');

Route::put('/tipomov_editar/{id}', 'TipoMovimientoController@update')->name('update');

Route::delete('/baja/{id}', 'TipoMovimientoController@baja')->name('baja');

//--------------------------------------------------------------------------
// Pagina Principal
//--------------------------------------------------------------------------



