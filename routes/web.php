<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\BlogController as AdminBLogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;




/*Only User*/
Route::middleware("auth")->group(function () {

    Route::view('/home', 'home')->name('home');

    Route::get('/author', [ProfileController::class, 'index'])->name('author');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    /*Blog Operations*/
    Route::resource('blogs', BlogController::class)
        ->except(['index', 'show'])
        ->parameters(['blogs' => 'blog:slug']);
});

Route::view('/', 'welcome')->name('welcome');


/*Register Routes*/
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store']);

/*Login Routes*/
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'submit']);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

/*Not included blog operations*/
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/categories/{category:slug}/blogs', [CategoryController::class, 'showBlogsByCategory'])->name('category.blogs');


Route::prefix('admin')->middleware('guest:admin')->as('admin.')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('login.index');

    Route::post('/login', [AdminLoginController::class, 'submit']);

    Route::get('/register', [AdminRegisterController::class, 'index'])->name('register.index');

    Route::post('/register', [AdminRegisterController::class, 'store']);

});

/*Only Admins*/
Route::prefix('admin')->middleware('auth:admin')->as('admin.')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::post('/logout', [AdminLoginController::class, 'logoutAdmin'])->name('logout');

    Route::resource('users', UserController::class);
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('blogs', AdminBLogController::class);
});

