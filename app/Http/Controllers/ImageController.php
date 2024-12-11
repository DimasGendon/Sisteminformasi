<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    // Display all images for a menu
    public function index($id)
    {
        $menus = Menu::all();
        $data = Menu::find($id);
        $images = Image::where('menus_id', $id)->get(); // Show images for this menu

        return view('image.index', compact('data', 'images', 'menus'));
    }

    // Show the form to upload a new image
    public function create($id)
    {
        $menus = Menu::all();
        $data = Menu::find($id);
        return view('image.create', compact('data', 'menus'));
    }

    // Store image after validation
    public function store(Request $request, $id)
    {
        // Validate the image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp,svg|max:2048', // Validasi gambar
        ], [
            'image.required' => 'Harap pilih gambar untuk diupload.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Hanya file dengan format jpeg, png, jpg, gif, dan svg yang diperbolehkan.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ]);

        // If the image file exists, save it to storage
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Save image to storage

            // Save the image details to the database
            Image::create([
                'image' => $imagePath,
                'menus_id' => $id, // The ID of the associated menu
            ]);
        }

        // Redirect with success message
        return redirect()->route('image.index', $id)
                         ->with('Berhasil', 'Foto Berhasil Di Tambahkan');
    }

    // Edit the image
    public function edit($id)
    {
        $image = Image::findOrFail($id);
        $menus = Menu::all();
        return view('image.edit', compact('image', 'menus'));
    }

    // Update the image
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imageModel = Image::findOrFail($id);
    
        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image from storage if it exists
            if ($imageModel->image) {
                Storage::delete('public/' . $imageModel->image);
            }
    
            // Store the new image
            $path = $request->file('image')->store('images', 'public');
            $imageModel->image = $path;
        }
    
        // Save the changes to the image record
        $imageModel->save();
    
        // Redirect back to the image index page for the menu
        return redirect()->route('image.index', $imageModel->menus_id)
            ->with('success', 'Gambar berhasil diperbarui.');
    }
    
    // Delete the image
    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        // Delete the image file
        Storage::delete('public/' . $image->image);
        $image->delete();

        return redirect()->route('image.index', $image->menu_id)
                         ->with('error', 'Foto Berhasil Di Hapus');
    }
}
