<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\MisVisController;
use App\Http\Controllers\Panel\MisionVisController;

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

/*Route::get('/', function () {
    return view('sitioWeb/index');
});*/
Route::get('/', [PaginaController::class, 'inicio']);
/*Categorias*/
//Route::get('/informacion', [CategoriasController::class, 'informacion']);
//Route::get('/EditarCategoria/{id}', [CategoriasController::class, 'EditCategoria']);
//Route::put('/ActualizarCategoria/{id}', [CategoriasController::class, 'ActuCategoria']);
/*MisionVision*/
//Route::get('/informacionMisionVision', [MisVisController::class, 'infoMisVis']);
//Route::get('/editMisVis/{id}', [MisVisController::class, 'EditCategoria']);
//Route::put('/actuMisVis/{id}', [MisVisController::class, 'ActuCategoria']);

//Rutas Mision y Vision
Route::get('/MisVis',[MisionVisController::class, 'index']);
Route::get('/createMisVis', [MisionVisController::class, 'create']);
Route::post('/storeMisVis', [MisionVisController::class, 'store']);
Route::get('/editMisVis/{id}', [MisionVisController::class, 'edit']);
Route::put('/updateMisVis/{imagen}', [MisionVisController::class, 'update']);
Route::get('/statusMisVis/{id}', [MisionVisController::class, 'status']);
Route::get('/MisVisD',[MisionVisController::class, 'indexD']);