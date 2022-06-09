<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    public function Ejercicio3()
    {
        //carpeta.NombreArchivo
        return view('Ejercicio3.Ejercicio3');
    }

    public function resultado_Ej3(Request $request)
    {
        $ht = $request->ht;
        $t = $request->t;
        $salario = $request->salario;

        if ($ht > 50) {
            $he = $ht * $t;
            $salario = $he * 0.3;
        } else {
            $salario = $ht * $t;
        }

        return view('Ejercicio3.resultado_Ej3', compact('salario'));
    }
}
