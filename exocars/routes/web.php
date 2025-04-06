<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarListingsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountsController;

Route::view('/', 'pages.home')->name('home');

Route::get('/listings', [CarListingsController::class, 'index']);
Route::get('/preview/{id}', [CarListingsController::class, 'show']);
Route::get('/admin', [AdminController::class, 'index']);
Route::delete('/admin/remove_user/{id}', [AdminController::class, 'destroyUser'])->name('destroy.user');
Route::delete('/admin/remove_listing/{id}', [AdminController::class, 'destroyListing'])->name('destroy.listing');
Route::delete('/admin/remove_meeting/{id}', [AdminController::class, 'destroyMeeting'])->name('destroy.meeting');

Route::view('/login', 'user.login');
Route::view('/register', 'user.register');

Route::post('/register', [AccountsController::class, 'store'])->name('register.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
