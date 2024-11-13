<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Image;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the menus.
     */
    public function index()
    {
        $images = Image::all();
        $menus = Menu::all();
        return view('menu.index', compact('images','menus'));
    }


    /**
     * Show the form for creating a new menu.
     */
    public function create()
    {
        $menus = Menu::all();
        return view('menu.create', compact('menus'));
    }


    /**
     * Store a newly created menu in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
<<<<<<< Updated upstream
            'name' => 'required|string|max:255', // Menjamin 'name' harus diisi
            'type' => 'required', // Menjamin 'type' harus dipilih antara 'Single Data' atau 'Multiple'
            'description' => 'nullable', // 'description' tetap bersifat opsional
        ], [
            // Pesan custom untuk validasi
            'name.required' => 'Nama menu harus diisi.',
            'type.required' => 'Tipe menu harus dipilih.',
            'type.in' => 'Tipe menu hanya boleh dipilih antara "Single Data" dan "Multiple".',
=======
            'name' => 'required|string|max:255',
            'type' => 'required', // Pastikan opsi ini sesuai
            'description' => 'nullable', // Validasi untuk description
>>>>>>> Stashed changes
        ]);

        // Menyimpan data yang divalidasi ke dalam database
        Menu::create($request->only('name', 'type', 'description'));

        // Redirect dengan pesan sukses
        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }


    /**
     * Display the specified menu.
     */
    // public function show(Menu $menu)
    // {
    //     return view('sidebar', compact('menu'));
    // }

    /**
     * Show the form for editing the specified menu.
     */
    public function edit(Menu $menu)
    {
        $data = Menu::findOrFail($menu->id);
        $menus = Menu::all();

        return view('menu.edit', compact('data', 'menus'));
    }

    /**
     * Update the specified menu in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required',  // Perbaiki validasi tipe
            'description' => 'nullable',  // Validasi deskripsi jika ada
        ]);

        // Update menu
        $menu->update($request->only('name', 'type', 'description'));

        // Redirect kembali ke index dengan pesan sukses
        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui');
    }

    /**
     * Remove the specified menu from storage.
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menu.index')->with('error', 'Menu berhasil dihapus.');
    }

    public function showMultiple($id)
    {
        $data = Menu::findOrFail($id);
        // dd($data);
        $menus = Menu::all();
        return view('multiple.index', compact('data', 'menus'));
    }
    public function show($id)
    {
        $menus = Menu::all();
        $data = Menu::findOrFail($id);
        return view('sidebare', compact('menus', 'data'));
    }
}
