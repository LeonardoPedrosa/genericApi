<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// PRODUTOS
Route::get('/produto', 'ListaGenericaController@produtos');

Route::get('/produto/{id}', 'ListaGenericaController@consultaProduto');
 
Route::post('/produto', 'ListaGenericaController@novoProduto');
 
Route::put('/produto/{id}', 'ListaGenericaController@editar');
 
Route::delete('/produto/{id}', 'ListaGenericaController@excluir');

//USUARIO
Route::get('/usuario/{id}', 'UsuarioController@dadosUsuario');