<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PaneldeControlController;
use App\Http\Controllers\Panel\MisVisController;

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

Route::get('/inicio', [PaginaController::class, 'inicio']);

//ADMIN
Route::get('/paneldecontrol', [PaneldeControlController::class, 'paneldecontrol']);

//Ruta Mision y Vision
Route::get('/misvis', [MisVisController::class, 'index']);
Route::get('/createMisVis', [MisVisController::class, 'create']);
Route::post('/storeMisVis', [MisVisController::class, 'store']);
Route::get('/editMisVis/{id}', [MisVisController::class, 'edit']);
Route::put('/updateMisVis/{image}', [MisVisController::class, 'update']);
Route::get('/statusMisVis/{id}', [MisVisController::class, 'status']);
Route::get('/MisVisD', [MisVisController::class, 'indexD']);