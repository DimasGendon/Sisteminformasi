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
        $images = Image::all();
        $menus = Menu::all();
        $data = Menu::findOrFail($id);

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

   // Method untuk menyimpan gambar dengan validasi
   public function store(Request $request, $id)
   {
       // Validasi request yang masuk
       $request->validate([
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
       ], [
           'image.required' => 'Harap pilih gambar untuk diupload.',
           'image.image' => 'File yang diunggah harus berupa gambar.',
           'image.mimes' => 'Hanya file dengan format jpeg, png, jpg, gif, dan svg yang diperbolehkan.',
           'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
       ]);

       // Jika file gambar ada, simpan ke storage
       if ($request->hasFile('image')) {
           $imagePath = $request->file('image')->store('images', 'public'); // Menyimpan gambar di folder 'images'

           // Simpan path gambar ke database
           Image::create([
               'image' => $imagePath,
               'menu_id' => $id, // Id menu yang terkait
           ]);
       }

       // Redirect dengan pesan sukses
       return redirect()->route('image.index', $id)
           ->with('Berhasil', 'Gambar berhasil ditambahkan!');
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
