<?php

use App\Http\Controllers\TareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::put('tarea/{tareaId}/restore', [TareaController::class, 'restore']);
Route::patch('tarea/{tarea}/estado-hecha/{hecha}', [TareaController::class, 'cambiarhecha'])->name('tarea.estado.hecha');
Route::apiResource('tarea', TareaController::class);

// Aquí puedes añadir más rutas API según necesites
