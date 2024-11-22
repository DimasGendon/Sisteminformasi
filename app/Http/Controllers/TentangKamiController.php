<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use App\Models\Menu;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{

    // Menampilkan form untuk membuat description baru
    public function create(Request $request)
    {
        // Cek apakah ada data TentangKami pertama
        $tentangkamis = TentangKami::first();

        // Jika belum ada data TentangKami, tampilkan form untuk membuat data baru
        if ($tentangkamis == null) {
            $menus = Menu::all(); // Ambil data menus
            return view('admin.tentang_kami.create', compact('menus'));
        } else {
            // Jika sudah ada data TentangKami, ambil data dan tampilkan form edit
            $menus = Menu::all();
            return view('admin.tentang_kami.edit', $tentangkamis->id, compact('tentangkamis', 'menus'));
        }
    }
    public function navigateToTentangKami()
    {
        // Cek apakah sudah ada data TentangKami
        $tentangkamis = TentangKami::first();

        // Jika data sudah ada, arahkan ke halaman edit
        if ($tentangkamis) {
            return redirect()->route('tentang_kami.edit', $tentangkamis->id);
        } else {
            // Jika belum ada data, arahkan ke halaman create
            return redirect()->route('tentang_kami.create');
        }
    }

    // Menyimpan data baru ke database
    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required', // Validasi description
        ]);

        // Menyimpan deskripsi yang diterima dari CKEditor
        $tentangKami = TentangKami::create([
            'description' => $request->description,
        ]);

        // Mengarahkan ke halaman edit untuk deskripsi yang baru saja disimpan
        return redirect()->route('tentang_kami.edit', $tentangKami->id)
            ->with('Berhasil', 'Tentang Kami Berhasil Di Tambah!');
    }

    // Menampilkan form untuk mengedit description
    public function edit($id)
    {
        $tentangKami = TentangKami::findOrFail($id);
        $menus = Menu::all();
        return view('admin.tentang_kami.edit', compact('tentangKami', 'menus'));
    }

    // Mengupdate description yang ada
    public function update(Request $request, $id)
    {
        // Validasi deskripsi
        $request->validate([
            'description' => 'required',
        ]);

        // Mencari data yang ingin diupdate
        $tentangKami = TentangKami::findOrFail($id);

        // Update deskripsi
        $tentangKami->update([
            'description' => $request->description,
        ]);

        // Redirect kembali ke halaman edit dengan ID yang sesuai
        return redirect()->route('tentang_kami.edit', $id)
            ->with('Berhasil', 'Tentang Kami Berhasil diperbarui!');
    }
}
