<?php

namespace App\Http\Controllers;

use App\Models\Multiple;
use App\Models\Menu;
use Illuminate\Http\Request;

class MultipleController extends Controller
{
    public function index()
    {
        // Fetch all multiples along with their related menus
        $items = Multiple::with('menu')->get();
        return view('multiple.index', compact('items')); // Pass $items to the view
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
        $menus = Menu::all();
        $data = Menu::findOrFail($id);
        return view('multiple.index', compact('menus', 'data'));
    }
}
