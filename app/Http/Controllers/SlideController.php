<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Menu;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        $menus = Menu::all();
        return view('admin.slide.index', compact('slides', 'menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image' // Validasi foto yang diupload
        ]);
    
        if ($request->hasFile('photo')) {
            // Ambil file foto yang diupload
            $photoFile = $request->file('photo');
    
            // Buat nama file unik
            $photoName = uniqid() . '.jpg';  // Pastikan ekstensi file selalu .jpg
    
            // Lokasi penyimpanan di direktori public/storage/slide
            $folderPath = public_path('storage/slide');
    
            // Membuat folder jika belum ada
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true); // Folder dan semua subfoldernya akan dibuat jika belum ada
            }
    
            // Path lengkap untuk menyimpan foto
            $path = $folderPath . '/' . $photoName;
    
            // Ubah ukuran foto menggunakan Intervention Image dan simpan dalam format jpg
            Image::make($photoFile)->encode('jpg', 75)  // Memastikan gambar disimpan dalam format .jpg
                ->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);
    
            // Simpan path foto ke database
            Slide::create([
                'judul' => $request->judul,
                'photo_path' => 'slide/' . $photoName,
            ]);
    
            return redirect()->route('slide')->with('Berhasil', 'Foto berhasil diupload!');
        }
    
        return back()->with('error', 'Gagal mengupload foto.');
    }
    

    public function destroy($id)
    {
        // Cari slide berdasarkan ID
        $slide = Slide::findOrFail($id);

        // Hapus file foto dari storage
        $photoPath = public_path('storage/' . $slide->photo_path);
        if (File::exists($photoPath)) {
            File::delete($photoPath); // Hapus file foto
        }

        // Hapus data slide dari database
        $slide->delete();

        // Redirect kembali ke index dengan pesan sukses
        return redirect()->route('slide')->with('Berhasil', 'Foto berhasil dihapus!');
    }
}
