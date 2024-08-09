
<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('blogs', BlogController::class);
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/home', [BlogController::class, 'home'])->name('home');



Route::get('/home', [BlogController::class, 'home'])->name('home');
Route::get('/dashboard', [BlogController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
Route::get('/landing-page', [BlogController::class, 'landingPage'])->name('landing.page');

Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
// routes/web.php

Route::get('/', [BlogController::class, 'landingPage'])->name('landing');



// Route::get('/landing', [BlogController::class, 'landing'])->name('landing');
