<?php

use App\Http\Controllers\Availabilities;
use App\Http\Controllers\Accommodations;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::controller(Accommodations::class)->group(function ($id) {
    Route::get('/', 'index')->name('home');
    Route::get('/accommodation/{id}', 'show')->name('show');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('availabilities', Availabilities::class)->only(['index', 'store'])->middleware(['auth', 'verified']);;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
