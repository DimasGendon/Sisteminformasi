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
        return view('lokers.index', compact('lokers', 'menus'));
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
                $folderPath = public_path('storage/loker');

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
                Loker::create([
                    'foto' => 'loker/' . $fotoName,
                ]);
            }

        return redirect()->route('lokers.index')->with('success', 'Mitra berhasil ditambahkan!');
    }
}

    public function destroy($id)
    {
        $loker = Loker::findOrFail($id);
        $loker->delete();

        return redirect()->route('lokers.index')->with('error', 'Menu berhasil dihapus.');
    }
}
