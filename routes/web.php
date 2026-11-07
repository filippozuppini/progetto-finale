<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\DeveloperContoller;
use App\Http\Controllers\Admin\PlatformController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('games', GameController::class);
        Route::resource('genres', GenreController::class);
        Route::resource('developers', DeveloperContoller::class);
        Route::resource('platforms', PlatformController::class);
        
    });

require __DIR__.'/auth.php';