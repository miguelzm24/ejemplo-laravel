<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\LibroController;
use App\Models\Pelicula;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

//Route::get('/peliculas/create', [PeliculaController::class, 'create']);
Route::get('/peliculas/list', [PeliculaController::class, 'list']);
Route::get('/peliculas/show/{id}', [PeliculaController::class, 'show']);
Route::get('/peliculas/update', [PeliculaController::class, 'update']);
Route::get('/peliculas/delete', [PeliculaController::class, 'delete']);

Route::get('/peliculas/form', [PeliculaController::class, 'mostrar_formulario']);
Route::get('/peliculas/show/{id}', [PeliculaController::class, 'show']);
Route::post('/peliculas/store', [PeliculaController::class, 'store']);
Route::put('/peliculas/update', [PeliculaController::class, 'update']);
Route::delete('/peliculas/delete', [PeliculaController::class, 'delete']);

// Route::get('/libro/create', [LibroController::class, 'create']);
// Route::get('/libro/show', [LibroController::class, 'show']);
// Route::get('/libro/update', [LibroController::class, 'update']);
// Route::get('/libro/delete', [LibroController::class, 'delete']);

Route::post('/peliculas/store', [PeliculaController::class, 'store']);

