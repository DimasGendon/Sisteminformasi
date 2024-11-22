<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Menu;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index(){
        $mitras= Mitra::all();
        $menus = Menu::all();
        return view('mitra.index', compact('mitras', 'menus'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $fotoFile) {
                // Buat nama file unik
                $fotoName = uniqid() . '.' . $fotoFile->getClientOriginalExtension();

                // Lokasi penyimpanan di direktori public/storage/slide
                $folderPath = public_path('storage/mitra');

                // Membuat folder jika belum ada
                if (!file_exists($folderPath)) {
                    mkdir($folderPath, 0777, true); // Folder dan semua subfoldernya akan dibuat jika belum ada
                }

                // Path lengkap untuk menyimpan foto
                $path = $folderPath . '/' . $fotoName;

                // Ubah ukuran foto menggunakan Intervention Image dan simpan
                Image::make($fotoFile)->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                // Simpan path foto ke database
                Mitra::create([
                    'foto' => 'mitra/' . $fotoName,
                ]);
            }

        return redirect()->route('mitra.index')->with('success', 'Mitra berhasil ditambahkan!');
    }
}

    public function destroy($id)
    {
        $mitra = Mitra::findOrFail($id);
        $mitra->delete();

        return redirect()->route('mitra.index')->with('error', 'Menu berhasil dihapus.');
    }

}
