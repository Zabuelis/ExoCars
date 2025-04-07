<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarListingsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\AuthController;

// Public
Route::view('/', 'pages.home')->name('home');
Route::get('/listings', [CarListingsController::class, 'index']);

Route::get('/logout', function () {
    return redirect()->route('home');
});

// Authentication
Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login');
    Route::get('/register', 'showRegister')->name('register');
    Route::post('/login', 'login')->name('make.login');
    Route::post('/register', 'register')->name('make.register');
});

// Only for authenticated users
Route::middleware('auth')->group(function () {
    // Admin
    Route::middleware('is_admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index']);
        Route::delete('/admin/remove_user/{id}', [AdminController::class, 'destroyUser'])->name('destroy.user');
        Route::delete('/admin/remove_listing/{id}', [AdminController::class, 'destroyListing'])->name('destroy.listing');
        Route::delete('/admin/remove_meeting/{id}', [AdminController::class, 'destroyMeeting'])->name('destroy.meeting');
    });

    // Common user
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/preview/{id}', [CarListingsController::class, 'show']);
});
