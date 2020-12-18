<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ReservasController;

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

//Ruta /
Route::get('/',[HotelController::class,'getIndex']);

//Ruta Historia
Route::get('hotel/historia',[HotelController::class,'showHistoria']);

//Ruta Mision-Vision
Route::get('hotel/mision-vision',[HotelController::class,'showMision']);

//Ruta Ubicacion
Route::get('hotel/ubicacion',[HotelController::class,'showUbicacion']);

//Ruta Servicios/Habitaciones
Route::get('servicios/habitaciones',[HabitacionesController::class,'showHabitaciones']);

//Ruta Clientes/Visualizar
Route::get('clientes/visualizar',[ClientesController::class,'showClientes']);

//Ruta Facturacion
Route::get('facturacion/factura',[FacturacionController::class,'getFactura']);

//Ruta Reservas
Route::get('reservas',[ReservasController::class,'getReservas']);

//Ruta Contactos
Route::get('contactos',[HotelController::class,'showContactos']);



/*Ruta Servicios/Eventos
Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios/eventos',array('id'=>$id));
});*/
