<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Menu;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();
        $menus = Menu::all();
        return view('kontak.index', compact('kontaks', 'menus'));
    }

    public function create()
    {
        $menus = Menu::all();
        return view('kontak.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'maps' => 'required|string|max:255',
            'whatsapp' => 'required|numeric',
            'facebook' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
        ]);

        Kontak::create($validated);

        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil ditambahkan.');
    }

    public function edit(Kontak $kontak)
    {
        return view('kontak.edit', compact('kontak'));
    }

    public function update(Request $request, Kontak $kontak)
    {
        $validated = $request->validate([
            'maps' => 'required|string|max:255',
            'whatsapp' => 'required|numeric',
            'facebook' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
        ]);

        $kontak->update($validated);

        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil diperbarui.');
    }

    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil dihapus.');
    }
}
