<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $menus = Menu::all();
        return view('welcome', compact('menus'));
    }

}
