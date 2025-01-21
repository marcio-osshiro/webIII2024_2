<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\IndexController;
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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

});

require __DIR__.'/auth.php';
