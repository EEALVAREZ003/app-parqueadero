<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentinelaController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\DireccionpolicialController;
use App\Http\Controllers\ExternoController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\InternoController;
use App\Http\Controllers\LugarestacionamientoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\SeccionalpolicialController;
use App\Http\Controllers\VehiculoController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/centinela/save', [CentinelaController::class, 'save']);
Route::get('/centinela/datos', [CentinelaController::class, 'getdata']);
Route::put('/centinela/update', [CentinelaController::class, 'update']);
Route::delete('/centinela/delete', [CentinelaController::class, 'delete']);

Route::post('/clase/save', [ClaseController::class, 'save']);
Route::get('/clase/datos', [ClaseController::class, 'getdata']);
Route::put('/clase/update', [ClaseController::class, 'update']);
Route::delete('/clase/delete', [ClaseController::class, 'delete']);

Route::post('/detalle/save', [DetalleController::class, 'save']);
Route::get('/detalle/datos', [DetalleController::class, 'getdata']);
Route::put('/detalle/update', [DetalleController::class, 'update']);
Route::delete('/detalle/delete', [DetalleController::class, 'delete']);

Route::post('/direccion/save', [DireccionpolicialController::class, 'save']);
Route::get('/direccion/datos', [DireccionpolicialController::class, 'getdata']);
Route::put('/direccion/update', [DireccionpolicialController::class, 'update']);
Route::delete('/direccion/delete', [DireccionpolicialController::class, 'delete']);

Route::post('/externo/save', [ExternoController::class, 'save']);
Route::get('/externo/datos', [ExternoController::class, 'getdata']);
Route::put('/externo/update', [ExternoController::class, 'update']);
Route::delete('/externo/delete', [ExternoController::class, 'delete']);

Route::post('/grado/save', [GradoController::class, 'save']);
Route::get('/grado/datos', [GradoController::class, 'getdata']);
Route::put('/grado/update', [GradoController::class, 'update']);
Route::delete('/grado/delete', [GradoController::class, 'delete']);

Route::post('/interno/save', [InternoController::class, 'save']);
Route::get('/interno/datos', [InternoController::class, 'getdata']);
Route::put('/interno/update', [InternoController::class, 'update']);
Route::delete('/interno/delete', [InternoController::class, 'delete']);

Route::post('/lugar/save', [LugarestacionamientoController::class, 'save']);
Route::get('/lugar/datos', [LugarestacionamientoController::class, 'getdata']);
Route::put('/lugar/update', [LugarestacionamientoController::class, 'update']);
Route::delete('/lugar/delete', [LugarestacionamientoController::class, 'delete']);

Route::post('/registro/save', [RegistroController::class, 'save']);
Route::get('/registro/datos', [RegistroController::class, 'getdata']);
Route::put('/registro/update', [RegistroController::class, 'update']);
Route::delete('/registro/delete', [RegistroController::class, 'delete']);

Route::post('/responsable/save', [ResponsableController::class, 'save']);
Route::get('/responsable/datos', [ResponsableController::class, 'getdata']);
Route::put('/responsable/update', [ResponsableController::class, 'update']);
Route::delete('/responsable/delete', [ResponsableController::class, 'delete']);

Route::post('/seccional/save', [SeccionalpolicialController::class, 'save']);
Route::get('/seccional/datos', [SeccionalpolicialController::class, 'getdata']);
Route::put('/seccional/update', [SeccionalpolicialController::class, 'update']);
Route::delete('/seccional/delete', [SeccionalpolicialController::class, 'delete']);

Route::post('/vehiculo/save', [VehiculoController::class, 'save']);
Route::get('/vehiculo/datos', [VehiculoController::class, 'getdata']);
Route::put('/vehiculo/update', [VehiculoController::class, 'update']);
Route::delete('/vehiculo/delete', [VehiculoController::class, 'delete']);

//a continuación se encuentra un segundo método para definir la ruta, así:

//Route::controller(CentinelaController::class)->group(function(){
//Route::post('/centinela/save','save');
//Route::get('/centinela/datos','getdata');
//Route::put('/centinela/update','update');
//Route::delete('/centinela/delete','delete');
//});

//Route::controller(ClasevehiculoController::class)->group(function(){
//Route::post('/clase/save','save');
//Route::get('/clase/datos','getdata');
//Route::put('/clase/update','update');
//Route::delete('/clase/delete','delete');
//});