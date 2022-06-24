<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class SignupController extends Controller
{
    public function index(){
        return view('users.signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nik' => 'required|numeric|digits:16|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:20',
            'password_confirmation' => 'required|same:password'
        ]);


        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/sign_in')->with('success', ' Data user telah berhasil ditambahkan');
    }
}
