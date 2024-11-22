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
            'judul.required' => 'URL Facebook wajib diisi.',
            'judul.string' => 'URL Facebook harus berupa teks.',
            'judul.max' => 'URL Facebook maksimal 255 karakter.',

            // Pesan validasi untuk 'deskripsi'
            'deskripsi.required' => 'URL Instagram wajib diisi.',
        ]);

        Informasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('informasi')->with('Berhasil', 'Informasi Berhasil Di Tambahkan');
    }

    public function update(Request $request, $id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('informasi')->with('Berhasil', 'informasi Berhasil Di Edit');
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();
        return redirect()->back()->with('Berhasil', 'Informasi Berhasil Di Hapus');
    }
}
