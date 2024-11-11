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
            $menus = Menu::all();
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

        public function update(Request $request, $id)
    {
            $request->validate([
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $image = Image::findOrFail($id);
            $image->description = $request->description; // Update deskripsi

            // Cek jika ada file gambar baru
            if ($request->hasFile('image')) {
                // Hapus gambar lama dari folder
                $oldImagePath = public_path('uploads/' . $image->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }

                // Simpan gambar baru
                $file = $request->file('image');
                $fileName = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $fileName);
                $image->image = $fileName; // Update path gambar
            }

            $image->save(); // Simpan perubahan

        return redirect()->route('images.index')->with('success', 'Image updated successfully.');
    }

}
