<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;


Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/show/{id}', [PageController::class, 'show'])->name('show');

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');

});

Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');