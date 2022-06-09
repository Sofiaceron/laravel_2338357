<?php
use App\Http\Controllers\Ejercicio2Controller;
use App\Http\Controllers\Ejercicio1Controller;
use App\Http\Controllers\Ejercicio3Controller;
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
    //en view (capeta.nombre archivo)
    return view('Template.Template');
});
//get sirve para mostrar el formulario
Route::get('/Ejercicio1', [Ejercicio1Controller::class, 'Ejercicio1'])->name('Ejercicio1');;
//post sirve para llevar los datos del formulario
Route::post('/resultadoej1', [Ejercicio1Controller::class, 'resultado_Ej1'])->name('resultadoej1');

Route::get('/Ejercicio2', [Ejercicio2Controller::class, 'Ejercicio2'])->name('Ejercicio2');
Route::post('/resultadoej2',[Ejercicio2Controller::class, 'resultado_Ej2'])->name('resultadoej2');


Route::get('/Ejercicio3', [Ejercicio3Controller::class, 'Ejercicio3'])->name('Ejercicio3');
Route::post('/resultadoej3',[Ejercicio3Controller::class, 'resultado_Ej3'])->name('resultadoej3');