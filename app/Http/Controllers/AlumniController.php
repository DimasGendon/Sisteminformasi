<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Menu;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::all();
        $menus = Menu::all();
        return view('alumni.index', compact('alumnis', 'menus'));
    }

    public function create()
    {
        return view('alumni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto
            'nama' => 'required',
            'jurusan' => 'required',
            'bekerja' => 'required',
        ]);

        // Mengambil file foto yang di-upload
        $foto = $request->file('foto');

        // Mengubah foto menggunakan Intervention Image
        $image = Image::make($foto);

        // Menyimpan gambar di folder 'public/alumni'
        $imageName = time() . '.' . $foto->getClientOriginalExtension();
        $image->save(public_path('storage/alumni/' . $imageName));

        // Menyimpan data alumni ke database
        Alumni::create([
            'foto' => $imageName,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'bekerja' => $request->bekerja,
        ]);

        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil ditambahkan');
    }


    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('alumni.edit', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto (nullable karena foto bisa kosong)
            'nama' => 'required',
            'jurusan' => 'required',
            'bekerja' => 'required',
        ]);
    
        // Mencari alumni berdasarkan ID
        $alumni = Alumni::findOrFail($id);
    
        // Jika ada file foto yang di-upload, proses dan simpan gambar baru
        if ($request->hasFile('foto')) {
            // Menghapus foto lama jika ada
            if ($alumni->foto && Storage::exists('public/alumni/' . $alumni->foto)) {
                Storage::delete('public/alumni/' . $alumni->foto);
            }
    
            // Mengambil file foto yang di-upload
            $foto = $request->file('foto');
            
            // Mengubah foto menggunakan Intervention Image
            $image = Image::make($foto);
    
            // Menyimpan gambar di folder 'public/alumni'
            $imageName = time() . '.' . $foto->getClientOriginalExtension();
            $image->save(public_path('storage/alumni/' . $imageName));
    
            // Menyimpan nama gambar baru
            $alumni->foto = $imageName;
        }
    
        // Memperbarui data alumni
        $alumni->nama = $request->nama;
        $alumni->jurusan = $request->jurusan;
        $alumni->bekerja = $request->bekerja;
    
        // Menyimpan perubahan ke database
        $alumni->save();
    
        // Redirect kembali ke halaman alumni dengan pesan sukses
        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil diperbarui');
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->delete();

        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil dihapus');
    }
}
