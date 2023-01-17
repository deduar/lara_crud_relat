<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;
use App\Http\Controllers\MaterialesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tareas', TareasController::class);
Route::resource('/materiales', MaterialesController::class);
