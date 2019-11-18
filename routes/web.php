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
Route::get('/cliente', 'ClienteController@mostrar')->name('cliente');

Route::get('/cliente', 'ClienteController@leer')->name('cliente');

Route::get('/cliente/{id}', 'ClienteController@detalle')->name('detalle');

Route::get('/cliente_alta', 'ClienteController@acceder')->name('cliente_alta');

Route::post('/', 'ClienteController@alta')->name('alta');

Route::get('/cliente_editar/{id}', 'ClienteController@editar')->name('editar');

Route::put('/cliente_editar/{id}', 'ClienteController@update')->name('update');

//comentario
Route::get('/comentario', 'ComentarioController@mostrar')->name('comentario');

Route::get('/comentario', 'ComentarioController@leer')->name('comentario');


//--------------------------------------------------------------------------
// Pagina Principal
//--------------------------------------------------------------------------



