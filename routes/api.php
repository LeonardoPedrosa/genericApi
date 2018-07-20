<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// PRODUTOS
Route::get('/produto', 'ListaGenericaController@produtos');
 
Route::post('/novo_produto', 'ListaGenericaController@novoProduto');
 
Route::put('/produto/{id}', 'ListaGenericaController@editar');
 
Route::delete('/produto/{id}', 'ListaGenericaController@excluir');

