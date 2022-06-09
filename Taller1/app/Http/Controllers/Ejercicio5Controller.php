<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio5Controller extends Controller
{
    public function Ejercicio5()
    {
        //carpeta.NombreArchivo
        return view('Ejercicio5.Ejercicio5');
    }

    public function resultado_Ej5(Request $request)
    {
      
    $radio = $request -> radio;
    $altura = $request -> altura;
    $volumen = 3.14*$radio*$radio*$altura;
    $area = (2.0*3.14)*$radio*($radio+$altura);

    
           
        return view('Ejercicio5.resultado_Ej5', compact('volumen','area'));
    }
}
