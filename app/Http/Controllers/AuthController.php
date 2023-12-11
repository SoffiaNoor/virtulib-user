<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return redirect('/');
        } else {
            return redirect('/login')->with('error', 'Email atau Password tidak sesuai');
        }
    }

    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
{
    try {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        // Tambahkan penanganan peran di sini
        $role = $request->input('role'); // Ambil nilai peran dari formulir
        $data['role'] = $role; // Tambahkan peran ke data

        User::create($data);

        return redirect()->route('register')->with('success', 'Account created successfully.');

    } catch (\Exception $e) {

        return redirect()->route('register')->with('error', 'Failed to create account. Account already exists.');

    }
}

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
