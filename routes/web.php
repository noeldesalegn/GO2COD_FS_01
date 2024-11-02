<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Auth::routes();

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/post',[HomeController::class,'post'])->name('home.post');
Route::get('/about',[HomeController::class,'about'])->name('home.about');
Route::get('/contact',[HomeController::class,'contact'])->name('home.contact');

