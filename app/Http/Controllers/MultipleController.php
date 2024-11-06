<?php

namespace App\Http\Controllers;

use App\Models\Multiple;
use App\Models\Menu;
use Illuminate\Http\Request;

class MultipleController extends Controller
{
    public function index()
    {
        $menus = Menu::all(); // Mengambil semua data menu
        return view('multiple.index', compact('menus')); // Kirimkan data menus ke view
    }



    public function create()
    {
        $menus = Menu::all(); // Fetch menus for the create form
        return view('multiple.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'menus_id' => 'required|exists:menus,id',
            'description' => 'required',
        ]);

        Multiple::create($request->all());
        return redirect()->route('multiple.index')->with('success', 'Item created successfully.');
    }

    public function edit(Multiple $multiple)
    {
        $menus = Menu::all(); // Fetch menus for the edit form
        return view('multiple.edit', compact('multiple', 'menus'));
    }

    public function update(Request $request, Multiple $multiple)
    {
        $request->validate([
            'menus_id' => 'required|exists:menus,id',
            'description' => 'required',
        ]);

        $multiple->update($request->all());
        return redirect()->route('multiple.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(Multiple $multiple)
    {
        $multiple->delete();
        return redirect()->route('multiple.index')->with('success', 'Item deleted successfully.');
    }

    public function show($id)
    {
        $menus = Menu::all(); // Mengambil semua menu
        $data = Menu::findOrFail($id); // Mencari menu berdasarkan id
        return view('multiple.index', compact('menus', 'data')); // Kirim data ke view
    }
}
