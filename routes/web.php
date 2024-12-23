<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProductController;
use Inertia\Inertia;
use App\Models\User;

Route::get('/', function () {
  return Inertia::render('Welcome', [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
  ]);
});

Route::get('/dashboard', function () {
  return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', function () {
  $users = User::all();
  return Inertia::render('About', ['users' => $users]);
})->middleware(['auth'])->name('about');

Route::get('/service', function () {
  return Inertia::render('Service');
})->middleware(['auth'])->name('service');

Route::middleware('auth')->group(function () {
  Route::get('/products', [ProductController::class, 'show'])->name('products.show');
  Route::post('/products', [ProductController::class, 'create'])->name('product.create');
  Route::post('/products/{id}', [ProductController::class, 'update'])->name('product.update');
  Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

require __DIR__ . '/auth.php';
