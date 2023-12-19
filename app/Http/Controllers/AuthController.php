<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Buyer;
use App\Models\Seller;
use Illuminate\Support\Str;


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
        return view('pages.register');
    }

    public function register(Request $request)
    {
        try {
            $data = [
                '_id' => (string) Str::uuid(), 
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->input('role'),
            ];

            $uu_id = $data['_id'];
            $nameid = $data['name'];

            $user = User::create($data);

            if ($data['role'] === 'buyer') {
                Buyer::create([
                    '_id' => (string) Str::uuid(), 
                    'user_id' => $uu_id,
                    'name' => $user->name,
                    'balance' => 0,
                ]);
            } else {
                Seller::create([
                    '_id' => (string) Str::uuid(), 
                    'user_id' => $uu_id,
                    'nama' => $user->name,
                    'balace' => 0,
                ]
                );
            }


            return redirect()->route('login')->with('success', 'Akun berhasil didaftarkan');

        } catch (\Exception $e) {
            return redirect()->route('register')->with('error', 'Gagal membuat Akun');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
