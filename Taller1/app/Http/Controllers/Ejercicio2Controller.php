<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
    public function Ejercicio2()
    {
        //carpeta.NombreArchivo
        return view('Ejercicio2.Ejercicio2');
    }

    public function resultado_Ej2(Request $request)
    {
        $numero1 = $request->numero1;
        $numero2 = $request->numero2;
        $numero3 = $request->numero3;
    
    
    $respuesta = $numero1 + $numero2;


    if ($respuesta==$numero3 ) {
        $respuesta="Iguales";
    }else {
            $respuesta="Distintas";
        }
        $respuesta;
        
    return view('Ejercicio2.resultado_Ej2',compact('respuesta'));

    }
}
