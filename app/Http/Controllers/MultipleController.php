<?php

namespace App\Http\Controllers;

use App\Models\Multiple;
use App\Models\Menu;
use Illuminate\Http\Request;

class MultipleController extends Controller
{
    public function index()
    {
        // Ambil semua data menu
        $menus = Menu::all();

        // Cek apakah ada tipe "Single Data" dan alihkan langsung ke halaman edit
        foreach ($menus as $menu) {
            if ($menu->type === 'Single Data') {
                return redirect()->route('menu.edit', $menu->id);
            }
        }

        // Kirimkan data menus ke view jika tidak ada tipe "Single Data"
        return view('multiple.index', compact('menus'));
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

    return redirect()->route('multiple.index', $request->menus_id)->with('success', 'Anda Berhasil Menambahkan Data Ini');
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

        // Update description
        $multiple->description = $request->description;

        // Update menu ID
        $multiple->menus_id = $request->menus_id;

        $multiple->save();

        return redirect()->route('multiple.index', $multiple->menus_id)->with('info', 'Anda Berhasil Memperbaharui Data Ini');
    }



    public function destroy($menu)
    {
        // Find the Multiple entry by ID or fail if not found
        $multiple = Multiple::findOrFail($menu);
        // Delete the Multiple entry
        $multiple->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('multiple.index', $multiple->menus_id)->with('error', 'Anda Berhasil Menghapus Data Ini');
    }

    public function show($menu)
    {
        $menus = Menu::all(); // Mengambil semua menu
        $data = Menu::findOrFail($menu); // Mencari menu berdasarkan id
        return view('multiple.index', compact('menus', 'data')); // Kirim data ke view
    }
}
