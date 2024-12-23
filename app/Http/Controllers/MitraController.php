<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Menu;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        $mitras = Mitra::all();
        $menus = Menu::all();
        return view('admin.mitra.index', compact('mitras', 'menus'));
    }
    public function store(Request $request)
    {
        // Validasi input dengan pesan kustom
        $request->validate([
            'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'foto.*.required' => 'Harap pilih foto untuk diunggah.',
            'foto.*.image' => 'File yang dipilih harus berupa gambar.',
            'foto.*.mimes' => 'File yang dipilih harus memiliki format jpeg, png, jpg, atau gif.',
            'foto.*.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
        ]);

        $failedUploads =[];

        // Pastikan ada file yang diupload
        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $fotoFile) {
                try{
                // Buat nama file unik
                $photoName = uniqid() . '.jpg';  // Pastikan ekstensi file selalu .jpg

                // Lokasi penyimpanan di direktori public/storage/mitra
                $folderPath = public_path('storage/mitra');

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
                Mitra::create([
                    'foto' => 'mitra/' . $photoName,
                ]);

            }catch(\Exception $e) {
                $failedUploads[] = $fotoFile->getClientOriginalName();
            }
        }

        if(emty($failedUploads)) {
            return redirect()->route('mitra.index')->with('Berhasil', 'Mitra Berhasil Di Tambahkan');
        } else {

            return redirect()->route('mitra.index')->withErrors(['foto' => 'File yang dipilih harus memiliki format jpeg, png, jpg, atau gif.'. implode(',', $failedUploads)]);
        }

        } else {
            // If no file is uploaded, return an error message
            return redirect()->back()->withErrors(['foto' => 'Harap Pilih Foto Untuk Di Unggah!']);
        }
    }



    public function destroy($id)
    {
        $mitra = Mitra::findOrFail($id);
        $mitra->delete();

        return redirect()->route('mitra.index')->with('Berhasil', 'Mitra Berhasil Di Hapus.');
    }
}
