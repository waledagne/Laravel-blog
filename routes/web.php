<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\Auth\RegisterController;
use App\HTTP\Controllers\Auth\LoginController;
use App\HTTP\Controllers\Auth\LogoutController;
use App\HTTP\Controllers\DashboardController;
use App\HTTP\Controllers\PostController;
use App\HTTP\Controllers\PostLikeController;
use App\HTTP\Controllers\UserPostController;

Route::get('/',function () {
   return view ('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/users/{user}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');


// Route::get('/posts', function () {
//    return view('posts.index');
// });
