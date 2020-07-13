<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
    public function listar(){
        return Persona::all();
    }

    public function registrar(Request $request){
        $persona = new Persona();
        $persona->numero_identificacion = $request['numero_identificacion'];
        $persona->nombre = $request['nombre'];
        $persona->apellido = $request['apellido'];
        $persona->correo = $request['correo'];
        $persona->id_cargo = $request['id_cargo'];
        $persona->save();
    }

    public function actualizar(Request $request){
        Persona::where('id',$request['id'])
        ->update([
            'numero_identificacion' => $request['numero_identificacion'],
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'correo' => $request['correo'],
            'id_cargo' => $request['id_cargo']
        ]);
    }

    public function eliminar($id){
        Persona::destroy($id);
    }

}
