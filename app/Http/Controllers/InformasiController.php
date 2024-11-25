<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Menu;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $informasis = Informasi::orderBy('id', 'DESC')->get();
        $menus = Menu::all();
        return view('admin.informasi.index', compact('informasis', 'menus'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
        ], [
            // Pesan validasi untuk 'facebook'
            'judul.required' => 'Judul wajib diisi.',
            'judul.string' => 'Judul harus berupa teks.',
            'judul.max' => 'Judul maksimal 255 karakter.',

            // Pesan validasi untuk 'deskripsi'
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);

        Informasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('informasi')->with('Berhasil', 'Informasi Berhasil Di Tambahkan');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
        ], [
            // Pesan validasi untuk 'facebook'
            'judul.required' => 'Judul wajib diisi.',
            'judul.string' => 'Judul harus berupa teks.',
            'judul.max' => 'Judul maksimal 255 karakter.',

            // Pesan validasi untuk 'deskripsi'
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);
        $informasi = Informasi::findOrFail($id);
        $informasi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('informasi')->with('Berhasil', 'Informasi Berhasil Di Perbarui');
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();
        return redirect()->back()->with('Berhasil', 'Informasi Berhasil Di Hapus');
    }
}
