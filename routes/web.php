<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\Panel\LogosController;
use App\Http\Controllers\Panel\MisionVisController;
use App\Http\Controllers\Panel\CarruselsController;
use App\Http\Controllers\Panel\SobreNosController;

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
//Ruta Página Inicio
Route::get('/', [PaginaController::class, 'inicio']);

//Rutas Logo PC
Route::get('/Logo',[LogosController::class, 'index']);
Route::get('/createLogo', [LogosController::class, 'create']);
Route::post('/storeLogo', [LogosController::class, 'store']);
Route::get('/editLogo/{id}', [LogosController::class, 'edit']);
Route::put('/updateLogo/{imgL}', [LogosController::class, 'update']);
Route::get('/statusLogo/{id}', [LogosController::class, 'status']);
Route::get('/LogoD',[LogosController::class, 'indexD']);

//Rutas Misión y Visión PC
Route::get('/MisVis',[MisionVisController::class, 'index']);
Route::get('/createMisVis', [MisionVisController::class, 'create']);
Route::post('/storeMisVis', [MisionVisController::class, 'store']);
Route::get('/editMisVis/{id}', [MisionVisController::class, 'edit']);
Route::put('/updateMisVis/{imagen}', [MisionVisController::class, 'update']);
Route::get('/statusMisVis/{id}', [MisionVisController::class, 'status']);
Route::get('/MisVisD',[MisionVisController::class, 'indexD']);

//Rutas Carrusel PC
Route::get('/Carrusel',[CarruselsController::class, 'index']);
Route::get('/createCarrusel', [CarruselsController::class, 'create']);
Route::post('/storeCarrusel', [CarruselsController::class, 'store']);
Route::get('/editCarrusel/{id}', [CarruselsController::class, 'edit']);
Route::put('/updateCarrusel/{imagen}', [CarruselsController::class, 'update']);
Route::get('/statusCarrusel/{id}', [CarruselsController::class, 'status']);
Route::get('/CarruselD',[CarruselsController::class, 'indexD']);

//Rutas Sobre Nosotros PC
Route::get('/SobreNos',[SobreNosController::class, 'index']);
Route::get('/createSobreNos', [SobreNosController::class, 'create']);
Route::post('/storeSobreNos', [SobreNosController::class, 'store']);
Route::get('/editSobreNos/{id}', [SobreNosController::class, 'edit']);
Route::put('/updateSobreNos/{imagen}', [SobreNosController::class, 'update']);
Route::get('/statusSobreNos/{id}', [SobreNosController::class, 'status']);
Route::get('/SobreNosD',[SobreNosController::class, 'indexD']);