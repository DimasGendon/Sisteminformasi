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
        return view('menu.index', compact('menus')); // Mengirim data ke view
    }

    /**
     * Show the form for creating a new menu.
     */
    public function create()
    {
        return view('menu.create');
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
    public function show(Menu $menu)
    {
        return view('menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified menu.
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    /**
     * Update the specified menu in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:Single Multi,Multiple', // Validasi tipe saat update
            'description' => 'nullable|', // Boleh kosong saat update
        ]);

        $menu->update($request->only('name', 'type', 'description'));

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
}
