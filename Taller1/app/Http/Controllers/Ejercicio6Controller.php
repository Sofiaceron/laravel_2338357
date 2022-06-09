<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio6Controller extends Controller
{
    public function Ejercicio6(){
        return view('Ejercicio6.Ejercicio6');
    }

    public function resultado_Ej6(Request $request){
        $nombre = $request->nombre;
        $numero1 = $request->numero1;
        $numero2 = $request->numero2;

        $respuesta = ($numero1*0.4 + $numero2*0.6);
        
        $nota = $respuesta;


        if($respuesta<=2.0){
            $nota = "Malo";
        }elseif($respuesta>2.0 && $respuesta<=3.0){
            $nota = "Insuficiente";
        }elseif($respuesta>3.0 && $respuesta<=4.0){
            $nota = "Aceptable";
        }elseif($respuesta>4.0 && $respuesta<=4.5){
            $nota = "Bueno";
        }else{
            $nota = "Excelente";
        }

    
        return view('Ejercicio6.resultado_Ej6', compact('nombre','respuesta', 'nota'));

    }
    
}

