<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Loker;
use App\Models\Mitra;
use App\Models\Slide;
use App\Models\Alumni;
use App\Models\Kontak;
use App\Models\Multiple;
use App\Models\Informasi;
use App\Models\TentangKami;
use App\Models\Vimi;
use Illuminate\Http\Request;

class NewTemplateController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $multiples = Multiple::all();
        $slides = Slide::all();
        $tentangkamis = TentangKami::all();
        $kontaks = Kontak::all();
        $alumnis = Alumni::all();
        $mitras = Mitra::all();
        $lokers = Loker::all();
        $informasis = Informasi::all();
        $vimis = Vimi::all();
        return view('layout.newtemplate', compact('menus','multiples', 'slides', 'tentangkamis',
        'kontaks','alumnis','mitras','informasis','lokers','vimis'));
    }
}
