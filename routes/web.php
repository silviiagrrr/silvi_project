<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::get('/menu', [SessionController::class, 'menu'])->name('menu');
Route::get('/sesi', [SessionController::class, 'index']);
Route::get('/sesi/index', [SessionController::class, 'showLoginForm'])->name('sesi.index');
Route::get('/sesi/index', [SessionController::class, 'showLoginForm'])->name('sesi.login');


Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('sesi.logout');
Route::get('/sesi/register', [SessionController::class, 'register'])->name('sesi.register');
Route::post('/sesi/register', [SessionController::class, 'create'])->name('sesi.create');
Route::get('/sesi/info', [SessionController::class, 'info'])->name('sesi.info');

Route::get('/sesi/home', [HomeController::class, 'home'])->name('sesi.home');
