<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function index()
    {
        return view('users.signin');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return back()->with('loginError', 'Login Failed!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/sign_in');

    }
}
