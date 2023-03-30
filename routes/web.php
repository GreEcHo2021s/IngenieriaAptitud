<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\ResultadosController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formularios', function () {
    return view('formularios');
});

Route::get('/preguntasa', function () {
    return view('preguntasa');
});

Route::get('/preguntas/{area}', [PreguntasController::class, 'preguntasPorArea']);

Route::resource('formulario', FormularioController::class);

Route::resource('resultados', ResultadosController::class);
