<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Menu;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\HigherOrderWhenProxy;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('id', 'DESC')->get();
        $menus = Menu::all();
        return view('admin.slide.index', compact('slides', 'menus'));
    }

    public function store(Request $request)
    {
        // Validasi input, buat 'judul' menjadi optional
        $request->validate([
            'judul' => 'nullable|string|max:255', // Membolehkan judul kosong
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi foto
        ], [
            // Pesan error khusus
            'judul.required' => 'Judul foto wajib diisi.',
            'photo.required' => 'Foto Wajib Diunggah!.',
            'photo.image' => 'File yang diunggah harus berupa gambar.',
            'photo.mimes' => 'File gambar yang diizinkan hanya bertipe: jpg, jpeg, png, gif.',
            'photo.max' => 'Ukuran file gambar maksimal 2MB.',
        ]);

        // Memproses file foto
        if ($request->hasFile('photo')) {
            $photoFile = $request->file('photo');
            $photoName = uniqid() . '.jpg'; // Nama file unik
            $folderPath = public_path('storage/slide');

            // Membuat folder jika belum ada
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }

            // Path untuk menyimpan foto
            $path = $folderPath . '/' . $photoName;

            // Mengubah ukuran foto menggunakan Intervention Image dan menyimpannya sebagai .jpg
            Image::make($photoFile)->encode('jpg', 75)
                ->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

            // Menyimpan data ke database
            Slide::create([
                'judul' => $request->judul,  // Judul bisa kosong
                'photo_path' => 'slide/' . $photoName,
            ]);

            // Mengarahkan dan mengirimkan pesan sukses
            return redirect()->route('admin.slide.index')->with('Berhasil', 'Slide Berhasil Di Tambahkan');
        } else {
            // Jika tidak ada file yang diunggah, kembalikan error foto
            return redirect()->back()->withErrors(['photo' => 'Harap pilih foto untuk diunggah.']);
        }
    }






    public function destroy($id)
    {
        // Mencari data slide berdasarkan ID
        $slide = Slide::findOrFail($id);

        // Hapus file gambar dari penyimpanan
        $photoPath = public_path('storage/' . $slide->photo_path);

        if (File::exists($photoPath)) {
            // Jika file gambar ada, hapus file gambar
            File::delete($photoPath);
        }

        // Hapus data slide dari database
        $slide->delete();

        // Kembali ke halaman index slide dengan pesan sukses
        return redirect()->route('admin.slide.index')->with('Berhasil', 'Slide berhasil dihapus!');
    }

}
