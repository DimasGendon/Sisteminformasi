<?php

namespace App\Http\Controllers;

use App\Models\loker;
use App\Models\Menu;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    public function index(){
        $lokers= Loker::all();
        $menus = Menu::all();
        return view('admin.loker.index', compact('lokers', 'menus'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'foto.*.required' => 'Harap pilih foto untuk diunggah.',
            'foto.*.image' => 'File yang dipilih harus berupa gambar.',
            'foto.*.mimes' => 'File yang dipilih harus memiliki format jpeg, png, jpg, atau gif.',
            'foto.*.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
        ]);

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $fotoFile) {
                // Buat nama file unik
                $photoName = uniqid() . '.jpg';  // Pastikan ekstensi file selalu .jpg

                // Lokasi penyimpanan di direktori public/storage/slide
                $folderPath = public_path('storage/loker');

                // Membuat folder jika belum ada
                if (!file_exists($folderPath)) {
                    mkdir($folderPath, 0777, true); // Folder dan semua subfoldernya akan dibuat jika belum ada
                }

                // Path lengkap untuk menyimpan foto
                $path = $folderPath . '/' . $photoName;

                // Ubah ukuran foto menggunakan Intervention Image dan simpan
                Image::make($fotoFile)->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                // Simpan path foto ke database
                Loker::create([
                    'foto' => 'loker/' . $photoName,
                ]);
            }

        return redirect()->route('lokers.index')->with('Berhasil', 'Loker berhasil ditambahkan!');
    }
}

    public function destroy($id)
    {
        $loker = Loker::findOrFail($id);
        $loker->delete();

        return redirect()->route('lokers.index')->with('Berhasil', 'Loker berhasil dihapus.');
    }
}
