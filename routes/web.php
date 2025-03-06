<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GrupoInvestigacionController;
use App\Http\Controllers\ProductoInvestigativoController;
use App\Http\Controllers\PeriodoController;
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
    Route::resource('productos-investigativos', ProductoInvestigativoController::class)
    ->middleware(['auth', 'verified']);

    Route::prefix('parametros')->name('parametros.')->group(function(){
        Route::resource('periodos', PeriodoController::class)->middleware(['auth', 'verified']);

    });
   

require __DIR__.'/auth.php';
