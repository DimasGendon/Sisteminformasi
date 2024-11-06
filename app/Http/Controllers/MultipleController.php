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

        // Create the Multiple entry, ensuring menus_id is set correctly
        Multiple::create([
            'menus_id' => $request->menus_id,
            'description' => $request->description,
        ]);

        Multiple::create($request->all()); // Create the Multiple entry

        return redirect()->route('multiple.index', $request->menus_id)->with('success', 'Item created successfully.');
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

        return redirect()->route('multiple.index', $multiple->menus_id)->with('success', 'Item updated successfully.');
    }



    public function destroy($menu)
    {
    // Find the Multiple entry by ID or fail if not found
        $multiple = Multiple::findOrFail($menu);
        // Delete the Multiple entry
        $multiple->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('multiple.index', $multiple->menus_id)->with('success', 'Item deleted successfully.');
    }

    public function show($menu)
    {
        $menus = Menu::all(); // Mengambil semua menu
        $data = Menu::findOrFail($id); // Mencari menu berdasarkan id
        return view('multiple.index', compact('menus', 'data')); // Kirim data ke view
    }



}
