<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    public function Ejercicio3(){
        return view ('Ejercicio3.Ejercicio3');
    }

    public function resultado_Ej3(Request $request){
        $nombres = $request->nombres;
        $fecha = $request->fecha;

        if ($fecha<=2004) {
            $respuesta="Apto para votar en elecciones 2022";}
            else {
                $respuesta="No es apto para votar en elecciones 2022";
            }
            $respuesta;

        return view ('Ejercicio3.resultado_Ej3',compact('nombres','fecha','respuesta'));
    }
}
