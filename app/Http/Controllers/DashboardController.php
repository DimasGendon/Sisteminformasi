<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Image;
use App\Models\Multiple;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $images = Image::all();
        $menus = Menu::all();
        return view('dashboard', compact('images', 'menus')); // Passing menus to the view
    }
}
