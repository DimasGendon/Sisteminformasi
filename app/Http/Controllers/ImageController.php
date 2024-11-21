<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index($id)
    {
        $menus = menu::all();
        $data = Menu::find($id);
        $images = Image::all();

        // Menampilkan view dengan data gambar
        return view('image.index', compact('data','images', 'menus'));
    }


    public function create($id)
    {
        $menus = menu::all();
        $data = Menu::find($id);
        $images = Image::all();
        // Menampilkan form untuk membuat gambar baru
        return view('image.create', compact('data','images', 'menus'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',  // File validation
        ]);

        // Store the image in storage (public directory)
        $imagePath = $request->file('image')->store('images', 'public');

        // Create a new image record in the database
        $image = new Image();
        $image->image = $imagePath;
        $image->menus_id = $request->menus_id; // Make sure menus_id is being passed
        $image->save();
        // Redirect atau mengarahkan kembali setelah sukses
        return redirect()->route('image.index', $request->menus_id)->with('success', 'Image uploaded successfully.');
    }


    public function edit($id)
    {
        $image = Image::findOrFail($id); // Temukan gambar berdasarkan ID
        $menus = Menu::all(); // Ambil semua menu (atau sesuai kebutuhan)
        return view('image.edit', compact('image', 'menus')); // Kembalikan view edit
    }

    // Fungsi untuk memperbarui gambar
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageModel = Image::findOrFail($id);

        // Cek apakah ada gambar baru yang di-upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika perlu
            if ($imageModel->image) {
                Storage::delete('public/' . $imageModel->image);
            }

            // Simpan gambar baru
            $path = $request->file('image')->store('images', 'public'); // Atur lokasi penyimpanan sesuai kebutuhan
            $imageModel->image = $path;
        }

        // Simpan perubahan di database
        $imageModel->save();

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('image.index', $imageModel->menus_id)->with('success', 'Gambar berhasil diperbarui.');

    }




    public function destroy($id)
    {
        // Find the Multiple entry by ID or fail if not found
        $image = image::findOrFail($id);
        // Delete the image entry
        $image->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('image.index', $image->menus_id)->with('error', 'Anda Berhasil Menghapus Data Ini');
    }

}
