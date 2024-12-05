<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);

Route::get('/categoria', [CategoriaController::class, 'listar']);
Route::get('/categoria/novo', [CategoriaController::class, 'novo']);
Route::post('/categoria/salvar', [CategoriaController::class, 'salvar']);
Route::get('/categoria/editar/{id}', [CategoriaController::class, 'editar']);
Route::get('/categoria/apagar/{id}', [CategoriaController::class, 'apagar']);

Route::get('/noticia', [NoticiaController::class, 'listar']);
Route::get('/noticia/novo', [NoticiaController::class, 'novo']);
Route::post('/noticia/salvar', [NoticiaController::class, 'salvar']);
Route::get('/noticia/editar/{id}', [NoticiaController::class, 'editar']);
Route::get('/noticia/apagar/{id}', [NoticiaController::class, 'apagar']);
