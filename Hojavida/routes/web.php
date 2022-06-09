<?php
use App\Http\Controllers\HojavidaController;
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
    return view('welcome');
});

Route::get('/template',[HojavidaController::class,'vistaTemplate']);
Route::get('/datospersonales',[HojavidaController::class,'datospersonales']);
Route::get('/tablamultiplicar',[HojavidaController::class,'tablamultiplicar']);