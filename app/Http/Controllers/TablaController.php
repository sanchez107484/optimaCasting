<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function index(Request $request)
    {
        // Obtener los datos necesarios para la tabla
        //$datos = $request->input('datos');

        $datos_json = '[
            {
                "id": 1,
                "nombre": "Juan",
                "apellido": "Pérez",
                "edad": 25
            },
            {
                "id": 2,
                "nombre": "María",
                "apellido": "García",
                "edad": 32
            },
            {
                "id": 3,
                "nombre": "Luis",
                "apellido": "Hernández",
                "edad": 45
            }
        ]';

        $datos = json_decode($datos_json, true);
        $titulos = array_keys($datos[0]);
        $pantalla = 'Listado Perfiles';
        // Crear el arreglo con los datos y títulos
        $tabla = [
            'pantalla' => $pantalla,
            'titulos' => $titulos,
            'datos' => $datos,
        ];
        dump($tabla);
        // Retornar la vista que muestra la tabla
        return view('pages/tabla', compact('tabla'));
    }
}
