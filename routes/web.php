<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;

Route::get('/', function () {
    return view('home');
})->name('home');


// Rutas para el CRUD de Equipos
Route::resource('equipos', EquipoController::class);

// Rutas para el CRUD de Partidos
Route::resource('partidos', PartidoController::class);
 