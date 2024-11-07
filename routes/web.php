<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessuiController;

Route::get('test', function () {
    return new App\Mail\ContactMail();
});

// Authentication Routes
Auth::routes();

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

// Routes requiring authentication
Route::middleware('auth')->group(function () {
    Route::get('/createPosts', [HomeController::class, 'createPosts'])->name('home.createPosts');
    Route::post('/opost', [HomeController::class, 'opost'])->name('home.opost');
    Route::get('/post/{id}/edit', [HomeController::class, 'edit'])->name('home.edit');
    Route::put('/post/{id}', [HomeController::class, 'update'])->name('home.update');
    Route::delete('/post/{id}', [HomeController::class, 'destroy'])->name('home.destroy');
    Route::post('/logout', [SessuiController::class, 'logout'])->name('logout');
});

// Single Post View
Route::get('/post/{id}', [HomeController::class, 'post'])->name('home.post');
// Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



