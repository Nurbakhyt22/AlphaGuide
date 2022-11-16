<?php

use App\Http\Controllers\Auth2\LoginController;
use App\Http\Controllers\Auth2\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/main', function () {
    return view('home');
});

//Auth::routes();
Route::resource('posts' ,PostController::class);
Route::resource('resume' , ResumeController::class);
Route::get('/home', [MainController::class, 'index'])->name('home');

Route::get('/register' , [RegisterController::class , 'create'])->name('register.form');
Route::post('/register' , [RegisterController::class, 'register'])->name('register');

Route::get('/login' , [LoginController::class , 'create'])->name('login.form');
Route::post('/login' , [LoginController::class, 'login'])->name('login');
Route::post('/logout' , [LoginController::class , 'logout'])->name('logout');
Route::get('/main' , [MainController::class, 'main'])->name('main');

