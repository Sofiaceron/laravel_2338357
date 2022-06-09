<?php

use App\Http\Controllers\Ejercicio2Controller;
use App\Http\Controllers\Ejercicio3Controller;
use App\Http\Controllers\Ejercicio4Controller;
use App\Http\Controllers\Ejercicio5Controller;
use App\Http\Controllers\Ejercicio6Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Template.Template');
});

Route::get('/Ejercicio2', [Ejercicio2Controller::class, 'Ejercicio2'])->name('Ejercicio2');
Route::post('/resultadoej2',[Ejercicio2Controller::class, 'resultado_Ej2'])->name('resultadoej2');

Route::get('/Ejercicio3', [Ejercicio3Controller::class, 'Ejercicio3'])->name('Ejercicio3');
Route::post('/resultadoej3',[Ejercicio3Controller::class, 'resultado_Ej3'])->name('resultadoej3');

Route::get('/Ejercicio4', [Ejercicio4Controller::class, 'Ejercicio4'])->name('Ejercicio4');
Route::post('/resultadoej4',[Ejercicio4Controller::class, 'resultado_Ej4'])->name('resultadoej4');

Route::get('/Ejercicio5', [Ejercicio5Controller::class, 'Ejercicio5'])->name('Ejercicio5');
Route::post('/resultadoej5',[Ejercicio5Controller::class, 'resultado_Ej5'])->name('resultadoej5');

Route::get('/Ejercicio6', [Ejercicio6Controller::class, 'Ejercicio6'])->name('Ejercicio6');
Route::post('/resultadoej6',[Ejercicio6Controller::class, 'resultado_Ej6'])->name('resultadoej6');