<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;

Route::middleware("auth")->group(function () {
    Route::resource('blogs', BlogController::class)->except(['index', 'show']);

    Route::view('/home', 'home')->name('home');

    Route::get('/author', [ProfileController::class, 'index'])->name('author');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

Route::view('/', 'welcome')->name('welcome');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'loginPost']);

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'registerPost']);





Route::get('/categories', function () {
    return view('front.categories');
})->name('categories');







