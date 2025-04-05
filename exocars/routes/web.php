<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarListingsController;
use App\Http\Controllers\AdminController;

Route::view('/', 'pages.home');

Route::get('/listings', [CarListingsController::class, 'index']);
Route::get('/preview/{id}', [CarListingsController::class, 'show']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/remove_user/{id}', [AdminController::class, 'destroyUser']);
Route::get('/admin/remove_listing/{id}', [AdminController::class, 'destroyListing']);
Route::get('/admin/remove_meeting/{id}', [AdminController::class, 'destroyMeeting']);

Route::view('/login', 'user.login');
Route::view('/register', 'user.register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
