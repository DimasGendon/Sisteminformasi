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
        return view('admin.alumni.index', compact('alumnis', 'menus'));
    }

    public function create()
    {
        return view('admin.alumni.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required',
            'jurusan' => 'required',
            'bekerja' => 'required',
        ], [
            'foto.required' => 'Anda harus mengunggah foto.',
            'foto.image' => 'File foto harus berupa gambar.',
            'foto.mimes' => 'Foto harus berformat jpeg, png, jpg, atau gif.',
            'foto.max' => 'Foto tidak boleh lebih dari 2MB.',
            'nama.required' => 'Nama wajib diisi.',
            'jurusan.required' => 'Jurusan wajib diisi.',
            'bekerja.required' => 'Informasi pekerjaan wajib diisi.',
        ]);

        // Mengambil file foto yang di-upload
        if ($request->hasFile('foto')) {
            // Ambil file foto yang diupload
            $photoFile = $request->file('foto');

            // Buat nama file unik
            $photoName = uniqid() . '.jpg';  // Pastikan ekstensi file selalu .jpg

            // Lokasi penyimpanan di direktori public/storage/alumni
            $folderPath = public_path('storage/alumni');

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

            // Menyimpan data alumni ke database
            Alumni::create([
                'foto' => 'alumni/' . $photoName,  // Pastikan path sesuai dengan folder penyimpanan
                'nama' => $request->nama,
                'jurusan' => $request->jurusan,
                'bekerja' => $request->bekerja,
            ]);

            return redirect()->route('alumni.index')->with('Berhasil', 'Alumni berhasil ditambahkan');
        }

        return back()->with('error', 'Gagal mengupload foto.');
    }


    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('admin.alumni.edit', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required',
            'jurusan' => 'required',
            'bekerja' => 'required',
        ], [
            'foto.required' => 'Anda harus mengunggah foto.',
            'foto.image' => 'File foto harus berupa gambar.',
            'foto.mimes' => 'Foto harus berformat jpeg, png, jpg, atau gif.',
            'foto.max' => 'Foto tidak boleh lebih dari 2MB.',
            'nama.required' => 'Nama wajib diisi.',
            'jurusan.required' => 'Jurusan wajib diisi.',
            'bekerja.required' => 'Informasi pekerjaan wajib diisi.',
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
            $imageName = time() . '.jpg';  // Pastikan ekstensi file selalu .jpg
            $image->encode('jpg', 75)->save(public_path('storage/alumni/' . $imageName));  // Simpan dengan ekstensi .jpg

            // Menyimpan nama gambar baru
            $alumni->foto = 'alumni/' . $imageName;
        }

        // Memperbarui data alumni
        $alumni->nama = $request->nama;
        $alumni->jurusan = $request->jurusan;
        $alumni->bekerja = $request->bekerja;

        // Menyimpan perubahan ke database
        $alumni->save();

        // Redirect kembali ke halaman alumni dengan pesan sukses
        return redirect()->route('alumni.index')->with('Berhasil', 'Alumni berhasil diperbarui');
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->delete();

        return redirect()->route('alumni.index')->with('Berhasil', 'Alumni berhasil dihapus');
    }
}
