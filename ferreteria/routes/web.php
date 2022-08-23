<?php

use App\Http\Controllers\ServicioController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\WaytopayController;
use App\Http\Controllers\QuoteController;

use App\Models\Promocion;
use App\Models\Servicio;
use App\Models\Quote;
use App\Models\Employee;
use App\Models\Waytopay;
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
Route::get('/', function () {
    return view('Template.Template');
});

//Rutas para empleado
Route::resource('employee', EmployeeController::class);


//Rutas para forma_pago
Route::resource('waytopay', WaytopayController::class);

//Rutas para citas
Route::resource('quote', QuoteController::class);

Route::resource('servicio', ServicioController::class);

Route::resource('promocion', PromocionController::class);
