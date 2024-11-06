<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the menus.
     */
    public function index()
    {
        $menus = Menu::all(); // Ambil semua data menu
        return view('menu.index', compact('menus')); // Kirim data menus ke view
    }


    /**
     * Show the form for creating a new menu.
     */
    public function create()
    {
        $menus = Menu::all(); // Ambil data menu
        return view('menu.create', compact('menus')); // Kirimkan ke view
    }


    /**
     * Store a newly created menu in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:Single Multi,Multiple', // Pastikan opsi ini sesuai
            'description' => 'nullable|', // Validasi untuk description
        ]);

        Menu::create($request->only('name', 'type', 'description')); // Mengambil semua field yang diperlukan

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
    public function edit(Menu $menu)  // Menggunakan dependency injection langsung
    {
        // Mengirimkan data menu yang ditemukan ke view
        $menus = Menu::all(); // Ambil data menu

        return view('menu.edit', compact('menu'));  // Ganti variabel $menus menjadi $menu
    }

    /**
     * Update the specified menu in storage.
     */
    public function update(Request $request, Menu $menu)  // Menggunakan dependency injection
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:single,multi',  // Perbaiki validasi tipe
            'description' => 'nullable|string',  // Validasi deskripsi jika ada
        ]);

        // Update menu
        $menu->update($request->only('name', 'type', 'description'));

        // Redirect kembali ke index dengan pesan sukses
        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui.');
    }

    /**
     * Remove the specified menu from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus.');
    }

    public function show($id)
    {
        $menus = Menu::all();
        $data = Menu::findOrFail($id);
        return view('multiple.index', compact('menus', 'data'));
    }
}
