<?php

namespace App\Http\Controllers;

use App\Models\Multiple;
use App\Models\Menu;
use App\Models\Image;
use Illuminate\Http\Request;

class MultipleController extends Controller
{
    public function index($menu)
{
    $data = Menu::findOrFail($menu); // Ambil menu berdasarkan ID
    if ($data->type === 'Single Data') {
        return redirect()->route('menu.edit', $data->id);
    }

    $data = Menu::findOrFail($menu); // Ambil menu berdasarkan ID
    if ($data->type === 'Image Data') {
        return redirect()->route('image.index', $data->id);
    }

    $menus = Menu::all(); // Ambil semua menu jika tipe tidak 'Single Data'
    return view('multiple.index', compact('menus', 'data'));
}




    public function create($menu)
    {
        $data = Menu::findOrFail($menu); // Fetch the menu or fail if not found
        $menus = Menu::all();
        return view('multiple.create', compact('data', 'menus')); // Pass the menu to the view
    }
    public function store(Request $request)
    {
        $request->validate([
            'menus_id' => 'required|exists:menus,id', // Validate that the menu exists
            'description' => 'required', // Ensure description is provided
        ]);

        // Create the Multiple entry with validated data
        Multiple::create([
            'menus_id' => $request->menus_id,
            'description' => $request->description,
        ]);

        return redirect()->route('multiple.index', $request->menus_id)->with('success', 'Data Ini Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $multiple = Multiple::findOrFail($id); // Fetch the existing record
        $menus = Menu::all(); // Fetch all menus
        return view('multiple.edit', compact('multiple', 'menus')); // Return the edit view
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'menus_id' => 'required|exists:menus,id',
            'description' => 'required',
        ]);

        $multiple = Multiple::findOrFail($id);
        $multiple->update($request->only(['menus_id', 'description']));

        // Pastikan tipe menu tetap tidak berubah
        $menu = Menu::findOrFail($request->menus_id);
        if ($menu->type === 'Single Data') {
            return redirect()->route('menu.edit', $menu->id);
        }

        return redirect()->route('multiple.index', $multiple->menus_id)->with('info', 'Data Ini Berhasil Di Perbarui');
    }



    public function destroy($menu)
    {
        // Find the Multiple entry by ID or fail if not found
        $multiple = Multiple::findOrFail($menu);
        // Delete the Multiple entry
        $multiple->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('multiple.index', $multiple->menus_id)->with('error', 'Data Ini Berhasil Di Hapus');
    }

    public function show($menu)
    {
        $menus = Menu::all(); // Mengambil semua menu
        $data = Menu::findOrFail($menu); // Mencari menu berdasarkan id
        return view('multiple.index', compact('menus', 'data')); // Kirim data ke view
    }
}
