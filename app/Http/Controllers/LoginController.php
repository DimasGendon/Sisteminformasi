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
        $images = Image::all();
        $menus = Menu::all();
        return view('login' , compact('images', 'menus'));
    }

    public function store(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return view('dashboard');
        }
        return redirect('login')->with('Gagal', 'Password Yang Anda Masukkan Salah');
    }
}
