<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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

    public function register(Request $request)
    {
        $validated = $request->validate([
            'f_name' => 'required|string|max:59',
            'l_name' => 'required|string|max:50',
            'e_mail' => 'required|email|unique:account,e_mail|max:100',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = Account::create($validated);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'e_mail' => 'required|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        };

        throw ValidationException::withMessages([
            'fail_auth' => 'Hmm, appears that your provided credentials are incorrect.'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
