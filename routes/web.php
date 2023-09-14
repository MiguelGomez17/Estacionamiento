<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/tipos', [App\Http\Controllers\TiposController::class, 'viewTipos'])->name('tipos');
Route::any('/regTipo', [App\Http\Controllers\TiposController::class, 'regTipo'])->name('regTipo');

Route::get('/entradas', [App\Http\Controllers\ParkingController::class, 'viewEntradas'])->name('entradas');
Route::any('/regEntrada', [App\Http\Controllers\ParkingController::class, 'regEntrada'])->name('regEntrada');
Route::any('/regSalida/{id}', [App\Http\Controllers\ParkingController::class, 'regSalida'])->name('regSalida/{id}');
Route::any('/exportPdf', [App\Http\Controllers\ParkingController::class, 'exportPdf'])->name('exportPdf');
Route::any('/filtro', [App\Http\Controllers\ParkingController::class, 'filtro'])->name('filtro');
