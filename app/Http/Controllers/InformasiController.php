<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\TentangKami;
use App\Models\Vimi;
use App\Models\Slide;
use App\Models\Loker;
use App\Models\Alumni;
use App\Models\Kontak;
use App\Models\Mitra;
use App\Models\Menu;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $informasis = Informasi::orderBy('id', 'DESC')->paginate(5);
        $menus = Menu::all();
        return view('admin.informasi.index', compact('informasis', 'menus'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
        ], [
            // Pesan validasi untuk 'facebook'
            'judul.required' => 'Judul wajib diisi.',
            'judul.string' => 'Judul harus berupa teks.',
            'judul.max' => 'Judul maksimal 255 karakter.',

            // Pesan validasi untuk 'deskripsi'
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);

        Informasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('informasi')->with('Berhasil', 'Informasi Berhasil Di Tambahkan');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
        ], [
            // Pesan validasi untuk 'facebook'
            'judul.required' => 'Judul wajib diisi.',
            'judul.string' => 'Judul harus berupa teks.',
            'judul.max' => 'Judul maksimal 255 karakter.',

            // Pesan validasi untuk 'deskripsi'
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);
        $informasi = Informasi::findOrFail($id);
        $informasi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('informasi')->with('Berhasil', 'Informasi Berhasil Di Perbarui');
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();
        return redirect()->back()->with('Berhasil', 'Informasi Berhasil Di Hapus');
    }
    public function showAboutUs()
    {
        $tentangkamis = TentangKami::all(); // Ambil data Tentang Kami
        $vimis = Vimi::all();
        $slides = Slide::all();
        $informasis = Informasi::all();
        $kontaks = Kontak::all();
        $alumnis = Alumni::all();
        $mitras = Mitra::all();
        $lokers = Loker::all();
        return view('newGuest.informasi ', compact('tentangkamis','vimis','slides','informasis',
        'kontaks','alumnis','mitras','lokers'));
    }
    
}
