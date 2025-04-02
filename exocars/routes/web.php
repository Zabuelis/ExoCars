<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'pages.home');
Route::view('/admin', 'admin.dashboard');
Route::view('/listings', 'pages.listings');
Route::view('/preview', 'pages.preview');
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
