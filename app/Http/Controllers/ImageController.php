<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Menu;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        // Mengambil semua data gambar dari database
        $images = Image::all();
        $menus = Menu::all();

        // Menampilkan view dengan data gambar
        return view('image.index', compact('images', 'menus'));
    }

    public function edit($id)
    {
        $image = Image::findOrFail($id); // Mencari gambar berdasarkan ID
        return view('images.edit', compact('image'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat gambar baru
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


    

    public function show($id)
    {
        $image = Image::findOrFail($id); // Mencari gambar berdasarkan ID
        $menus = Menu::all();
        return view('images.show', compact('image', 'menus'));
    }

}
