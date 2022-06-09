<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HojavidaController extends Controller
{
    public function vistaTemplate()
    {
        return view('template.template');
    }
    public function datospersonales(){
        return view('Hojavida.datospersonales');

    }
    public function tablamultiplicar(){
        return view('Hojavida.tablamultiplicar');
    }

}
