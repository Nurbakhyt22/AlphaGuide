<?php

use App\Http\Controllers\Adm\CategoryController;
use App\Http\Controllers\Adm\CityController;
use App\Http\Controllers\Adm\PostController;
use App\Http\Controllers\Adm\RoleController;
use App\Http\Controllers\Adm\UserController;
use App\Http\Controllers\Auth2\LoginController;
use App\Http\Controllers\Auth2\RegisterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
   return redirect()->route('home');
});

Route::get('/main', function () {
    return view('home');
});

Route::middleware('hasrole:admin')->group(function (){
    //admimn kiretin jer
    Route::prefix('/adm')->as('adm.')->group(function () {
        Route::get('/users' , [UserController::class , 'index'])->name('users.index');
        Route::get('/users/search' , [UserController::class , 'index'])->name('users.search');
        Route::get('/users/{users}/edit' , [UserController::class , 'edit'])->name('users.edit');
        Route::put('/users/{users}' , [UserController::class , 'update'])->name('users.update');
        Route::put('/user/{user}/ban' , [UserController::class, 'ban'])->name('users.ban');
        Route::put('/user/{user}/unban' , [UserController::class, 'unban'])->name('users.unban');
        Route::get('/resume' , [ResumeController::class , 'index'])->name('resume.index');
        Route::get('/roles/create' , [RoleController::class , 'create'])->name('roles.create');
        Route::post('/roles/store' , [RoleController::class , 'store'])->name('roles.store');
        Route::get('/categories' , [CategoryController::class , 'index'])->name('cat.index');
        Route::get('/categories/create' , [CategoryController::class , 'create'])->name('cat.create');
        Route::post('/categories/store' , [CategoryController::class , 'store'])->name('cat.store');
        Route::delete('/categories/{category}' ,[CategoryController::class , 'destroy'])->name('cat.destroy');


    });
});

Route::middleware('hasrole:moderator')->group(function (){
    //moderator kiretin joldar
});
Route::get('/almaty' , [CityController::class , 'almaty'])->name('almaty');
Route::get('/almaty/events' , [CityController::class , 'events'])->name('almaty.events');

//Auth::routes();
Route::resource('posts' ,PostController::class);
//Route::resource('resume' , ResumeController::class);
Route::get('/home', [MainController::class, 'index'])->name('home');
Route::get('/resume', [ResumeController::class , 'index'])->name('resume.index');
Route::get('/resume{resume}', [ResumeController::class, 'show'])->name('resume.show');
Route::post('/resume/store', [ResumeController::class , 'store'])->name('resume.store');
Route::get('/resume/create', [ResumeController::class , 'create'])->name('resume.create');
Route::put('/resume{resume}/ban', [ResumeController::class , 'ban'])->name('resume.ban');
Route::put('/resume{resume}/unban', [ResumeController::class , 'unban'])->name('resume.unban');

Route::get('/guide', [MainController::class,'guide'])->name('guide');

Route::get('/register' , [RegisterController::class , 'create'])->name('register.form');
Route::post('/register' , [RegisterController::class, 'register'])->name('register');

Route::get('/login' , [LoginController::class , 'create'])->name('login.form');
Route::post('/login' , [LoginController::class, 'login'])->name('login');
Route::post('/logout' , [LoginController::class , 'logout'])->name('logout');
Route::get('/main' , [MainController::class, 'main'])->name('main');

