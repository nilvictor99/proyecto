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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    return "hello world";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTA PARA CARGAR LA VISTA CLIENTE

Route::get('/clientes', [App\Http\Controllers\clientescontroller::class, 'index'])->name('clientes');

//RUTA PARA CARGAR LA VISTA productos

Route::get('/productos', [App\Http\Controllers\productosController::class, 'index'])->name('productos');

//RUTA PARA CARGAR LA VISTA Compras

Route::get('/compras', [App\Http\Controllers\comprasController::class, 'index'])->name('compras');

//RUTA PARA CARGAR LA VISTA ventas

Route::get('/ventas', [App\Http\Controllers\ventasController::class, 'index'])->name('ventas');

//RUTA PARA CARGAR LA VISTA contable

Route::get('/contable', [App\Http\Controllers\contablecontroller::class, 'index'])->name('contable');
