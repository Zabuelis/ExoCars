<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('user.register');
    }

    public function showLogin()
    {
        return view('user.login');
    }

    public function register() {}

    public function login() {}
}
