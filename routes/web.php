<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\MultipleController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\VimiController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\InformasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth'); // Untuk daftar menu

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('store.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Menu
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index')->middleware('auth'); // Untuk daftar menu
Route::get('/isi', [MenuController::class, 'create'])->name('menu.create')->middleware('auth'); // Untuk mengisi
Route::post('/post', [MenuController::class, 'store'])->name('menu.store')->middleware('auth'); // Untuk menyimpan menu baru
Route::get('/menuedit/{menu}', [MenuController::class, 'edit'])->name('menu.edit')->middleware('auth'); // Untuk edit
Route::post('/postedit/{menu}', [MenuController::class, 'update'])->name('menu.update')->middleware('auth'); // Untuk daftar menu
Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy')->middleware('auth'); // Untuk menghapus menu
Route::post('/images', [EditorController::class, 'editor_image'])->name('store.image')->middleware('auth');

//Multipe Data
Route::get('/multiple/{menu}', [MultipleController::class, 'index'])->name('multiple.index')->middleware('auth');
Route::get('/create/{menu}', [MultipleController::class, 'create'])->name('multiple.create')->middleware('auth');
Route::post('/postmultiple', [MultipleController::class, 'store'])->name('multiple.store')->middleware('auth');
Route::get('/show-multiple/{menu}', [MultipleController::class, 'show'])->name('multiple.show')->middleware('auth');
Route::get('/multiple/{id}/edit', [MultipleController::class, 'edit'])->name('multiple.edit')->middleware('auth');
Route::put('/multipost/{id}', [MultipleController::class, 'update'])->name('multiple.update')->middleware('auth');
Route::delete('/multiple/{menu}', [MultipleController::class, 'destroy'])->name('multiple.hapus')->middleware('auth');

//Image
Route::get('/image/{id}', [ImageController::class, 'index'])->name('image.index')->middleware('auth');
Route::get('image/create/{id}', [ImageController::class, 'create'])->name('image.create')->middleware('auth');
Route::post('/image', [ImageController::class, 'store'])->name('image.store')->middleware('auth');
Route::get('/image/{id}/edit', [ImageController::class, 'edit'])->name('image.edit')->middleware('auth');
Route::put('/image/{id}', [ImageController::class, 'update'])->name('image.update')->middleware('auth');
Route::delete('/destroy/{id}', [ImageController::class, 'destroy'])->name('image.destroy')->middleware('auth');

//Slide
Route::get('/slide', [SlideController::class, 'index'])->name('admin.slide.index')->middleware('auth');
Route::post('/slide', [SlideController::class, 'store'])->name('store.slide')->middleware('auth');
Route::delete('slide/{id}', [SlideController::class, 'destroy'])->name('admin.slide.destroy')->middleware('auth');

//mitra
Route::get('/mitra', [MitraController::class, 'index'])->name('mitra.index')->middleware('auth');
Route::post('mitrapost', [MitraController::class, 'store'])->name('mitra.store')->middleware('auth');
Route::delete('mitra/{id}', [MitraController::class, 'destroy'])->name('mitra.destroy')->middleware('auth');

//lokers
Route::get('/Loker', [LokerController::class, 'index'])->name('lokers.index')->middleware('auth');
Route::post('Lokerpost', [LokerController::class, 'store'])->name('lokers.store')->middleware('auth');
Route::delete('Loker/{id}', [LokerController::class, 'destroy'])->name('lokers.destroy')->middleware('auth');

//Kontak
Route::get('kontak', [KontakController::class, 'navigateToKontak'])->name('kontak.navigate')->middleware('auth');
Route::get('/kontak/create', [KontakController::class, 'create'])->name('kontak.create')->middleware('auth');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store')->middleware('auth');
Route::get('/kontak/{id}/edit', [KontakController::class, 'edit'])->name('kontak.edit')->middleware('auth');
Route::put('/kontak/{id}', [KontakController::class, 'update'])->name('kontak.update')->middleware('auth');

//Tentang Kami
Route::get('tentang/create', [TentangKamiController::class, 'create'])->name('tentang_kami.create')->middleware('auth');
Route::get('tentang', [TentangKamiController::class, 'navigateToTentangKami'])->name('tentang_kami.navigate')->middleware('auth');
Route::post('tentang', [TentangKamiController::class, 'store'])->name('tentang_kami.store')->middleware('auth');
Route::get('tentang/{id}/edit', [TentangKamiController::class, 'edit'])->name('tentang_kami.edit')->middleware('auth');
Route::put('tentang/{id}', [TentangKamiController::class, 'update'])->name('tentang_kami.update')->middleware('auth');

//Visi Misi
Route::get('vimi/create', [VimiController::class, 'create'])->name('vimi.create')->middleware('auth');
Route::get('vimi', [VimiController::class, 'navigateToVimi'])->name('vimi.navigate')->middleware('auth');
Route::post('vimi', [VimiController::class, 'store'])->name('vimi.store')->middleware('auth');
Route::get('vimi/{id}/edit', [VimiController::class, 'edit'])->name('vimi.edit')->middleware('auth');
Route::put('vimi/{id}', [VimiController::class, 'update'])->name('vimi.update')->middleware('auth');

//Alumni
Route::get('alumni', [AlumniController::class, 'index'])->name('alumni.index')->middleware('auth');
Route::get('alumni/create', [AlumniController::class, 'create'])->name('alumni.create')->middleware('auth');
Route::post('alumni', [AlumniController::class, 'store'])->name('alumni.store')->middleware('auth');
Route::get('alumni/{alumni}/edit', [AlumniController::class, 'edit'])->name('alumni.edit')->middleware('auth');
Route::put('alumni/{alumni}', [AlumniController::class, 'update'])->name('alumni.update')->middleware('auth');
Route::delete('alumni/{alumni}', [AlumniController::class, 'destroy'])->name('alumni.destroy')->middleware('auth');

//Informasi
Route::get('informasi', [InformasiController::class, 'index'])->name('informasi')->middleware('auth');
Route::post('informasi', [InformasiController::class, 'store'])->name('store.informasi')->middleware('auth');
Route::put('informasi/{id}', [InformasiController::class, 'update'])->name('update.informasi')->middleware('auth');
Route::delete('informasi/{id}', [InformasiController::class, 'destroy'])->name('destroy.informasi')->middleware('auth');



//Guest
Route::get('/', [GuestController::class, 'index'])->name(name: 'guest');
Route::get('/guest/single//{id}', [GuestController::class, 'showSingle_data'])->name(name: 'showSingle_data.guest');
Route::get('/guest/multiple/{id}', [GuestController::class, 'showMultiple_data'])->name(name: 'showMultiple_data.guest');
Route::get('/slideGuest', [SlideController::class, 'index'])->name('slideGuest');
