<?php

namespace App\Http\Controllers;

use App\Models\Submenu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    /**
     * Tampilkan daftar submenu.
     */
    public function index()
    {
        $submenus = Submenu::all(); // Ambil semua data submenu
        return view('submenus.index', compact('submenus'));
    }

    /**
     * Tampilkan form untuk membuat submenu baru.
     */
    public function create()
    {
        
        return view('submenus.create');
    }

    /**
     * Simpan submenu baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048', // Maksimum 2MB
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('submenus'); // Simpan foto di folder 'submenus'
        }

        Submenu::create($validated);

        return redirect()->route('submenus.index')->with('success', 'Submenu berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail submenu.
     */
    public function show(Submenu $submenu)
    {
        return view('submenus.show', compact('submenu'));
    }

    /**
     * Tampilkan form untuk mengedit submenu.
     */
    public function edit(Submenu $submenu)
    {
        return view('submenus.edit', compact('submenu'));
    }

    /**
     * Update submenu di database.
     */
    public function update(Request $request, Submenu $submenu)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('submenus'); // Simpan foto baru
        }

        $submenu->update($validated);

        return redirect()->route('submenus.index')->with('success', 'Submenu berhasil diperbarui!');
    }

    /**
     * Hapus submenu dari database.
     */
    public function destroy(Submenu $submenu)
    {
        $submenu->delete();

        return redirect()->route('submenus.index')->with('success', 'Submenu berhasil dihapus!');
    }
}
