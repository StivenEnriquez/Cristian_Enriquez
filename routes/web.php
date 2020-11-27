<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\PQR;
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
//Rutas
Route::get('/', [Administracion::class,'index']);


// catalogo

Route::get('catalogo/perro', function () {
    return view ('catalogo.perro');
});

Route::get('catalogo/gato', function () {
    return view ('catalogo.gato');
});

Route::get('pqr/pqr',[PQR::class,'ayuda']); 

Route::get('ayuda/ayuda', function () {
    return view ('ayuda.ayuda');
});