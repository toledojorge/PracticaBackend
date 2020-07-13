<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/cargo/listar', 'CargoController@listar');
Route::post('/cargo/registrar', 'CargoController@registrar');
Route::put('/cargo/actualizar', 'CargoController@actualizar');
Route::delete('/cargo/eliminar/{id}', 'CargoController@eliminar');

Route::get('/persona/listar', 'PersonaController@listar');
Route::post('/persona/registrar', 'PersonaController@registrar');
Route::put('/persona/actualizar', 'PersonaController@actualizar');
Route::delete('/persona/eliminar/{id}', 'PersonaController@eliminar');