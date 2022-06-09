<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function datosPersonales()
    {
        echo "DATOS PERSONALES</h2>" . "<br>";
        echo "Nombres: Sofia Ceron";
    }
    public function estudios()
    {
        return view('estudios');
    }
    public function listarNumeros()
    {
        echo "Listado de numeros del 0 al 100: " . "<br>";
        for ($i = 0; $i <= 100; $i++) {
            echo $i . "<br>";
        }
    }
}
