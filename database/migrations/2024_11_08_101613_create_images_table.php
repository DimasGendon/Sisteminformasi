<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Menu; // Pastikan Anda mengimpor model Menu
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    // Menampilkan form untuk upload gambar
    public function create()
    {
        $menus = Menu::all(); // Ambil semua menu untuk dropdown
        return view('images.create', compact('menus'));
    }

    // Menyimpan gambar ke database
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'menus_id' => 'required|exists:menus,id', // Validasi menu ID
        ]);

        // Menyimpan gambar
        $path = $request->file('image')->store('images', 'public');

        // Menyimpan informasi gambar ke database
        Image::create([
            'image' => $path,
            'menus_id' => $request->menus_id,
        ]);

        return redirect()->route('images.create')->with('success', 'Image uploaded successfully.');
    }
}
