<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SessionController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('sesi.index'); // Ganti dengan view yang sesuai
        }
    }

    public function showLoginForm()
    {
        return view('sesi.home');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('sesi.home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }



    public function register()
    {
        return view('sesi.register'); // Ganti dengan view yang sesuai untuk form registrasi
    }

    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email yang dimasukkan tidak valid',
            'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password 8 karakter'
        ]);

        $data = [
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('siswa')->with('success', 'Berhasil login');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil logout');
    }

    public function info()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('sesi.info'); // Ganti dengan view yang sesuai
        }
    }
}
