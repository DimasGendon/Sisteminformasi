<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Image;
use App\Models\Multiple;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
        public function index() {
            $images = Image::all();
            $menus = Menu::all();
            return view('image.index', compact( 'images', 'menus')); // Passing menus to the view
    }

        public function create()
    {
            $images = Image::all();
            return view('image.create');
    }

        public function store(Request $request)
    {
            // Validasi input
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                // Tambahkan aturan validasi lain jika perlu
            ]);

            // Menyimpan gambar
            $imagePath = $request->file('image')->store('images', 'public');

            // Membuat entri baru di database
            Image::create([
                'path' => $imagePath,
                // Tambahkan field lain jika perlu
            ]);

            // Redirect atau mengarahkan kembali setelah sukses
            return redirect()->route('image.index')->with('success', 'Image uploaded successfully.');
    }

        public function edit($id)
    {
            $image = Image::findOrFail($id); // Mencari gambar berdasarkan ID
            return view('images.edit', compact('image'));
    }

       
}
