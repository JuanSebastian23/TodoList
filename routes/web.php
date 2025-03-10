<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Ruta para mostrar todas las tareas
Route::get('/', [TaskController::class, 'index']);

// Ruta para guardar una nueva tarea
Route::post('/', [TaskController::class, 'store']);

// Ruta para eliminar una tarea (no duplicada)
Route::delete('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

// Opcional: si necesitas más rutas en el futuro
// Route::resource('task', TaskController::class);