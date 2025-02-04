<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Models\TentangKami;
use App\Models\Vimi;
use App\Models\Slide;
use App\Models\Informasi;
use App\Models\Alumni;
use App\Models\Kontak;
use App\Models\Mitra;
use App\Models\Menu;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    public function index()
    {
        $lokers = Loker::orderBy('id', 'DESC')->paginate(4); // Menampilkan 4 data per halaman
        $menus = Menu::all();
        return view('admin.loker.index', compact('lokers', 'menus'));
    }
    public function store(Request $request)
    {
        // Validasi input dengan pesan kustom
        $request->validate([
            'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ], [
            'foto.*.required' => 'Harap pilih foto untuk diunggah.',
            'foto.*.image' => 'File yang dipilih harus berupa gambar.',
            'foto.*.mimes' => 'File yang dipilih harus memiliki format jpeg, png, jpg, atau gif.',
        ]);

        // Pastikan ada file yang diupload
        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $fotoFile) {
                // Buat nama file unik
                $photoName = uniqid() . '.jpg';  // Pastikan ekstensi file selalu .jpg

                // Lokasi penyimpanan di direktori public/storage/loker
                $folderPath = public_path('storage/loker');

                // Membuat folder jika belum ada
                if (!file_exists($folderPath)) {
                    mkdir($folderPath, 0777, true); // Folder dan semua subfoldernya akan dibuat jika belum ada
                }

                // Path lengkap untuk menyimpan foto
                $path = $folderPath . '/' . $photoName;

                // Ubah ukuran foto menggunakan Intervention Image dan simpan
                Image::make($fotoFile)->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                // Simpan path foto ke database
                Loker::create([
                    'foto' => 'loker/' . $photoName,
                ]);
            }

            return redirect()->route('lokers.index')->with('Berhasil', 'Loker berhasil Di Tambahkan!');
        } else {
            // If no file is uploaded, return an error message
            return redirect()->back()->withErrors(['foto' => 'Harap Pilih Foto Untuk Di Unggah!']);
        }

        return back()->with('error', 'Gagal mengupload foto.');
    }


    public function destroy($id)
    {
        $loker = Loker::findOrFail($id);
        $loker->delete();

        return redirect()->route('lokers.index')->with('Berhasil', 'Loker berhasil dihapus.');
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
        return view('newGuest.loker', compact('tentangkamis','vimis','slides','informasis',
        'kontaks','alumnis','mitras','lokers'));
    }
}
