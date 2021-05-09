<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\Auth\RegisterController;
use App\HTTP\Controllers\Auth\LoginController;
use App\HTTP\Controllers\Auth\LogoutController;
use App\HTTP\Controllers\DashboardController;
use App\HTTP\Controllers\PostController;

Route::get('/',function () {
   return view ('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');

// Route::get('/posts', function () {
//    return view('posts.index');
// });
