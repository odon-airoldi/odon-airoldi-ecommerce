<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::inertia('/', 'welcome')->name('home');

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
