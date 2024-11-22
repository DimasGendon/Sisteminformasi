<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Slide;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
            'photos.*' => 'required'
        ]);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photoFile) {
                // Buat nama file unik
                $photoName = uniqid() . '.' . $photoFile->getClientOriginalExtension();

                // Lokasi penyimpanan di direktori public/storage/slide
                $path = public_path('storage/slide/' . $photoName);

                // Ubah ukuran foto menggunakan Intervention Image dan simpan
                Image::make($photoFile)->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                // Simpan path foto ke database
                Slide::create([
                    'judul' => $request->judul,
                    'photo_path' => 'slide/' . $photoName,
                ]);
            }

            return redirect()->route('photos.index')->with('success', 'Semua foto berhasil diupload!');
        }

        return back()->with('error', 'Gagal mengupload foto.');
    }
}
