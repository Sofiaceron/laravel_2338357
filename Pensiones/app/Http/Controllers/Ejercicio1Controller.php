<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{
    public function Ejercicio1(){
        //carpeta.NombreArchivo
        return view('Ejercicio1.Ejercicio1');
    }

    public function resultado_Ej1(Request $request){
        //$numero1 le asigno con request lo que viene del formulario
        $numero1 = $request->numero1;
        return view('Ejercicio1.resultado_Ej1',compact('numero1'));
    }
}

