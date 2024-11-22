<?php

namespace App\Http\Controllers;

use App\Models\Vimi;
use App\Models\Menu;
use Illuminate\Http\Request;

class VimiController extends Controller
{

    // Menampilkan form untuk membuat description baru
    public function create(Request $request)
    {
        // Cek apakah ada data TentangKami pertama
        $vimis = vimi::first();

        // Jika belum ada data TentangKami, tampilkan form untuk membuat data baru
        if ($vimis == null) {
            $menus = Menu::all(); // Ambil data menus
            return view('admin.vimi.create', compact('menus'));
        } else {
            // Jika sudah ada data TentangKami, ambil data dan tampilkan form edit
            $menus = Menu::all();
            return view('admin.vimi.edit', $vimis->id, compact('vimi', 'menus'));
        }
    }
    public function navigateToVimi()
    {
        // Cek apakah sudah ada data TentangKami
        $vimis = Vimi::first();

        // Jika data sudah ada, arahkan ke halaman edit
        if ($vimis) {
            return redirect()->route('vimi.edit', $vimis->id);
        } else {
            // Jika belum ada data, arahkan ke halaman create
            return redirect()->route('vimi.create');
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
        $vimis = Vimi::create([
            'description' => $request->description,
        ]);

        // Mengarahkan ke halaman edit untuk deskripsi yang baru saja disimpan
        return redirect()->route('vimi.edit', $vimis->id)
            ->with('Berhasil', 'Visi Misi berhasil Di Tambah!');
    }

    // Menampilkan form untuk mengedit description
    public function edit($id)
    {
        $vimis = Vimi::findOrFail($id);
        $menus = Menu::all();
        return view('admin.vimi.edit', compact('vimis', 'menus'));
    }

    // Mengupdate description yang ada
    public function update(Request $request, $id)
    {
        // Validasi deskripsi
        $request->validate([
            'description' => 'required',
        ]);

        // Mencari data yang ingin diupdate
        $vimis = Vimi::findOrFail($id);

        // Update deskripsi
        $vimis->update([
            'description' => $request->description,
        ]);

        // Redirect kembali ke halaman edit dengan ID yang sesuai
        return redirect()->route('vimi.edit', $id)
            ->with('Berhasil', 'Visi Misi berhasil diperbarui!');
    }

}
