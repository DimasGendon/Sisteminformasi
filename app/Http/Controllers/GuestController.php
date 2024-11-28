<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Multiple;
use App\Models\Slide;
use App\Models\Kontak;
use App\Models\Alumni;
use App\Models\Mitra;
use App\Models\Informasi;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $multiples = Multiple::all();
        // $slides = Slide::all();
        $kontaks = Kontak::all();
        $alumnis = Alumni::all();
        $mitras = Mitra::all();
        $informasis = Informasi::all();
        return view('layout.guest', compact('menus','multiples', 'slides',
        'kontaks','alumnis','mitras','informasis'));
    }

    public function showSingle_data($id)
    {
        $data = Menu::findOrFail($id);
        $menus = Menu::all();
        $multiple_datas = Multiple::all();
        return view('guest.single_data', compact('data', 'menus', 'multiple_datas'));
    }
    public function showMultiple_data($id)
    {
        $data = Multiple::findOrFail($id);
        $multiples = Multiple::all();
        $menus = Menu::all();
        return view('guest.Multiple_data', compact('data', 'multiples','menus'));
    }
}
