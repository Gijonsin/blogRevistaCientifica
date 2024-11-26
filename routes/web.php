<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

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

Route::get('/', [PrincipalController::class, 'index'])->name('inicio.vista_inicio');
Route::get('/actual',[PrincipalController::class, 'actual'])->name('actual.vista_actual');
Route::get('/archivo',[PrincipalController::class, 'archivo'])->name('archivos.vista_archivo');
Route::get('/avisos',[PrincipalController::class, 'aviso'])->name('avisos.vista_aviso');
Route::get('/sobreLaRevista',[PrincipalController::class, 'sobreLaRevista'])->name('acercade.vista_sobreLaRevista');
Route::get('/envios',[PrincipalController::class, 'envio'])->name('envios.vista_envio');
Route::get('/login', [PrincipalController::class, 'login'])->name('usuarios.vista_login');
Route::get('/registro', [PrincipalController::class, 'registro'])->name('usuarios.vista_register');