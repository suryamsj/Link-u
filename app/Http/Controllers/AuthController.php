<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function formLogin()
    {
        // Kalau sudah ada session, rdirect ke halaman dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        // Kalau belom ada, tampilkan halaman login
        return view('auth.login');
    }

    public function formRegister()
    {
        // Kalau sudah ada session, rdirect ke halaman dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        // Kalau belom ada, tampilkan halaman register
        return view('auth.register');
    }

    public function login(Request $request)
    {
        // Validasi form yang di isi
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|string'
        ]);

        // Cek apakah remember me di ceklis atau tidak
        $remember = $request->remember ? true : false;

        Auth::attempt([
            'email'     => $request->email,
            'password'  => $request->password
        ], $remember);

        // Cek apakah berhasil login atau tidak
        if (Auth::check()) {
            return redirect()->route('dashboard')
                ->with('berhasil', 'Berhasil login!');
        } else {
            return redirect()->route('login')
                ->with('gagal', 'Gagal login!');
        }
    }

    public function register(Request $request)
    {
        // Validasi form yang di isi
        $request->validate([
            'name'      => 'required|min:8',
            'email'     => 'required|email:dns|unique:users,email',
            'password'  => 'required|confirmed|min:5'
        ]);

        // Membuat user / member baru
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        // Cek apakah $user bernilai true
        if ($user) {
            return redirect()->route('login')
                ->with('berhasil', 'Berhasil membuat akun, silahkan login!');
        } else {
            return redirect()->route('register')
                ->with('gagal', 'gagal membuat akun, silahkan coba lagi!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
