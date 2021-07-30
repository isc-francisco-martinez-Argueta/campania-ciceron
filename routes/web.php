<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
});

Route::get('ecologia', function () {
    return view('propuestas.ecologia');
})->name('ecologia');

Route::get('salud-publica', function () {
    return view('propuestas.salud');
})->name('salud');

Route::get('serguridad-publica', function () {
    return view('propuestas.seguridad');
})->name('seguridad');

Route::get('educacion', function () {
    return view('propuestas.educacion');
}) ->name('educacion');

Route::get('deporte', function () {
    return view('propuestas.deporte');
})->name('deporte');

Route::get('cultura', function () {
    return view('propuestas.cultura');
})->name('cultura');

Route::get('servicios-basicos', function () {
    return view('propuestas.servicio');
})->name('servicio');
