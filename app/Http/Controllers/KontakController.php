<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Menu;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function navigateToKontak()
    {
        // Cek apakah sudah ada data TentangKami
        $kontaks = Kontak::first();

        // Jika data sudah ada, arahkan ke halaman edit
        if ($kontaks) {
            return redirect()->route('kontak.edit', $kontaks->id);
        } else {
            // Jika belum ada data, arahkan ke halaman create
            return redirect()->route('kontak.create');
        }
    }
    // Menampilkan form untuk membuat atau mengedit data Kontak
    public function create()
    {
        $kontak = Kontak::first(); // Ambil data pertama Kontak

        // Jika belum ada data Kontak, tampilkan form untuk membuat data baru
        if ($kontak == null) {
            $menus = Menu::all(); // Ambil data menus
            return view('admin.kontak.create', compact('menus')); // Tampilkan form create
        } else {
            // Jika sudah ada data Kontak, tampilkan form edit
            $menus = Menu::all(); // Ambil data menus
            return view('admin.kontak.edit', compact('kontak', 'menus')); // Tampilkan form edit dengan data Kontak
        }
    }


    // Menyimpan data Kontak
    // Menyimpan data Kontak
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'whatsapp' => 'required',
            'facebook' => 'required|max:255',
            'instagram' => 'required|max:255',
        ], [
            // Pesan validasi untuk 'whatsapp'
            'whatsapp.required' => 'Nomor WhatsApp wajib diisi.',

            // Pesan validasi untuk 'facebook'
            'facebook.required' => ' Facebook wajib diisi.',
            'facebook.max' => ' Facebook maksimal 255 karakter.',

            // Pesan validasi untuk 'instagram'
            'instagram.required' => ' Instagram wajib diisi.',
            'instagram.max' => ' Instagram maksimal 255 karakter.',
        ]);

        // Menyimpan data ke database
        $kontak = Kontak::create($validated);

        // Redirect setelah berhasil
        return redirect()->route('kontak.edit', $kontak->id)
            ->with('Berhasil', 'Kontak Berhasil Di Tambahkan');
    }


    // Menampilkan form untuk mengedit data Kontak
    public function edit($id)
    {
        // Cari Kontak berdasarkan ID
        $kontak = Kontak::findOrFail($id);
        $menus = Menu::all(); // Ambil data menus
        return view('admin.kontak.edit', compact('kontak', 'menus')); // Tampilkan form edit dengan data Kontak
    }



    // Mengupdate data Kontak
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'whatsapp' => 'required',
            'facebook' => 'required|max:255',
            'instagram' => 'required|max:255',
        ], [
            // Pesan validasi untuk 'whatsapp'
            'whatsapp.required' => 'Nomor WhatsApp wajib diisi.',

            // Pesan validasi untuk 'facebook'
            'facebook.required' => ' Facebook wajib diisi.',
            'facebook.max' => ' Facebook maksimal 255 karakter.',

            // Pesan validasi untuk 'instagram'
            'instagram.required' => ' Instagram wajib diisi.',
            'instagram.max' => ' Instagram maksimal 255 karakter.',
        ]);

        $kontak = Kontak::findOrFail($id);
        // Update data
        $kontak->update($validated);

        // Redirect setelah berhasil
        return redirect()->route('kontak.edit', $id)->with('Berhasil', 'Kontak Berhasil Di Perbarui');
    }
}
