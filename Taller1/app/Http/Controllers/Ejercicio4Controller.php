<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio4Controller extends Controller
{
    public function Ejercicio4()
    {
        //carpeta.NombreArchivo
        return view('Ejercicio4.Ejercicio4');
    }

    public function resultado_Ej4(Request $request)
    {
        $numero = $request->numero;
        $suma = 0;
        if ($numero < 1000) {
            for ($i = 0; $i <= $numero; $i++) {
                $suma = ($suma + $i);
                $respuesta = 'la suma de los numeros es: ' . $suma;
            }
        } else {
            $respuesta = 'El numero excede el valor maximo de 1000';
        }



        return view('Ejercicio4.resultado_Ej4', compact('respuesta'));
    }
}
