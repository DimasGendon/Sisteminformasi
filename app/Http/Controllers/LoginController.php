<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // $images = Image::all();
        // $menus = Menu::all();
        return view('login');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password harus terdiri dari minimal 6 karakter.',
        ]);

        // Cek autentikasi
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('dashboard')->with('Berhasil', 'Anda Berhasil Masuk');
        }

        return redirect('login')->with('Gagal', 'Email atau password yang Anda masukkan salah.');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('Berhasil', 'Anda Berhasil Keluar');
    }
}
