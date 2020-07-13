<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;

class CargoController extends Controller
{
    
    public function listar(){
        return Cargo::all();
    }

    public function registrar(Request $request){
        $cargo = new Cargo();
        $cargo->nombre = $request['nombre'];
        $cargo->descripcion = $request['descripcion'];
        $cargo->save();
    }

    public function actualizar(Request $request){
        Cargo::where('id',$request['id'])
        ->update([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
        ]);
        return "Registro actualizado";
    }

    public function eliminar($id){
        Cargo::destroy($id);
    }


}
