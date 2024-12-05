<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AvisoController;




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
Route::get('/actual',[ArchivoController::class, 'vistaActual'])->name('actual.vista_actual');
//Route::get('/archivo',[PrincipalController::class, 'archivo'])->name('archivos.vista_archivo');
Route::get('/avisos',[PrincipalController::class, 'aviso'])->name('avisos.vista_aviso');
Route::get('/sobreLaRevista',[PrincipalController::class, 'sobreLaRevista'])->name('acercade.vista_sobreLaRevista');
//Route::get('/envios',[PrincipalController::class, 'envio'])->name('envios.vista_envio');
//Route::get('/login', [PrincipalController::class, 'login'])->name('usuarios.vista_login');
//Route::get('/registro', [PrincipalController::class, 'registro'])->name('usuarios.vista_register');
Route::get('/directorio', [PrincipalController::class, 'directorio'])->name('acercade.vista_directorio');
Route::get('/comite', [PrincipalController::class, 'comite'])->name('acercade.vista_comite');
Route::get('/revisores', [PrincipalController::class, 'revisores'])->name('acercade.vista_revisores');
Route::get('/webmaster', [PrincipalController::class, 'webmaster'])->name('acercade.vista_webmaster');
Route::get('/editor', [PrincipalController::class, 'editor'])->name('acercade.vista_editor');
Route::get('/indexa', [PrincipalController::class, 'indexa'])->name('acercade.vista_indexa');
Route::get('/declaracion_privacidad', [PrincipalController::class, 'declaracion_privacidad'])->name('acercade.vista_declaracion_privacidad');
Route::get('/contacto', [PrincipalController::class, 'contacto'])->name('acercade.vista_contacto');




// Route::get('/archivo', [ArchivoController::class, 'index'])->name('archivos.vista_archivo');
// Route::get('/revistas/{id}', [ArchivoController::class, 'show'])->name('revistas.show');
// Route::get('/articulos/{id}', [ArchivoController::class, 'detalleArticulo'])->name('articulo.detalle');


Route::get('/archivo', [ArchivoController::class, 'index'])->name('archivos.vista_archivo');
Route::get('/revistas/{id}', [ArchivoController::class, 'show'])->name('revistas.show');
Route::get('/articulos/{id}', [ArchivoController::class, 'detalleArticulo'])->name('articulo.detalle');

Route::get('/envios', [ArchivoController::class, 'create'])->name('envios.vista_envio'); // Muestra el formulario
Route::post('/envios', [ArchivoController::class, 'store'])->name('envios.store');  // Procesa el formulario

Route::view('/iniciar-sesion', 'usuarios.vista_login')->name('usuarios.vista_login');
Route::view('/registro', 'usuarios.vista_register')->name('usuarios.vista_register');

Route::post('validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('subscribir', [SubscriptionController::class, 'store'])->name('subscribir');

// Route::get('/avisos/crear', [AvisoController::class, 'create'])->name('avisos.create');
// Route::post('/avisos', [AvisoController::class, 'store'])->name('avisos.store');
// Route::get('/avisos/{id}', [AvisoController::class, 'show'])->name('avisos.show');

// Ruta para mostrar el formulario de creación de avisos (GET)
Route::get('/avisos/crear', [AvisoController::class, 'create'])->name('avisos.create');

// Ruta para almacenar el aviso (POST)
Route::post('/avisos', [AvisoController::class, 'store'])->name('avisos.store');

// Ruta para mostrar un aviso específico (GET)
Route::get('/avisos/{id}', [AvisoController::class, 'show'])->name('avisos.show');

// Ruta para mostrar todos los avisos (GET)
Route::get('/avisos', [AvisoController::class, 'index'])->name('avisos.index');