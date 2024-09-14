<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentinelaController;

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

//Route::controller(CentinelaController::class)->group(function(){
//Route::post('/centinela/save','save');
//Route::get('/centinela/datos','getdata');
//Route::put('/centinela/update','update');
//Route::delete('/centinela/delete','delete');
//});

//Route::controller(ClasevehiculoController::class)->group(function(){
  //  Route::post('/clase/save','save');
    //Route::get('/clase/datos','getdata');
    //Route::put('/clase/update','update');
    //Route::delete('/clase/delete','delete');
    //});