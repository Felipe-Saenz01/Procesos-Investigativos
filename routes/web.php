<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GrupoInvestigacionController;
use App\Http\Controllers\ProductoInvestigativoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Grupo de investigacion
Route::get('/grupo-investigacion', [GrupoInvestigacionController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('grupo-investigacion');
    
    
    // Productos Investigativos
    Route::resource('productos-investigativos', ProductoInvestigativoController::class)->middleware(['auth', 'verified']);
    // Route::get('productos', [ProductoInvestigativoController::class, 'index'])
    // ->middleware(['auth', 'verified'])->name('productos.index');
    // Route::get('productos/{id}', [ProductoInvestigativoController::class, 'show'])
    // ->middleware(['auth', 'verified'])->name('productos.show');

require __DIR__.'/auth.php';
