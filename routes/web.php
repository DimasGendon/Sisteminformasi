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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontakController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard'); // Untuk daftar menu

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('store.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Guest
Route::get('/guest', [GuestController::class, 'index'])->name(name: 'guest');
Route::get('/guest/single//{id}', [GuestController::class, 'showSingle_data'])->name(name: 'showSingle_data.guest');
Route::get('/guest/multiple/{id}', [GuestController::class, 'showMultiple_data'])->name(name: 'showMultiple_data.guest');

//Menu
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index')->middleware('auth'); // Untuk daftar menu
Route::get('/createmenu', [MenuController::class, 'create'])->name('menu.create')->middleware('auth'); // Untuk membuka form tambah menu
Route::post('/post', [MenuController::class, 'store'])->name('menu.store')->middleware('auth'); // Untuk menyimpan menu baru
Route::get('/show-menu/{id}', [MenuController::class, 'show'])->name('multiple.show')->middleware('auth'); // Untuk membuka form edit menu
Route::get('/editmenu/{menu}', [MenuController::class, 'edit'])->name('menu.edit')->middleware('auth'); // Untuk membuka form edit menu
Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('menu.update')->middleware('auth'); // Untuk memperbarui data menu
Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy')->middleware('auth'); // Untuk menghapus menu
Route::post('/images', [EditorController::class, 'editor_image'])->name('store.image')->middleware('auth');
Route::get('/multiple/{id}', [MenuController::class, 'showMultiple'])->name('multiple.index')->middleware('auth'); // Untuk menghapus menu

//Multipe Data
// Route::get('/multiple/{menu}', [MultipleController::class, 'index'])->name('multiple.index')->middleware('auth'); // Untuk daftar menu
Route::get('/create/{menu}', [MultipleController::class, 'create'])->name('multiple.create')->middleware('auth');
Route::post('/postmultiple', [MultipleController::class, 'store'])->name('multiple.store')->middleware('auth'); // Untuk menyimpan menu baru
Route::get('/show-multiple/{menu}', [MultipleController::class, 'show'])->name('multiple.show')->middleware('auth'); // Untuk membuka form edit menu
Route::get('/multiple/{id}/edit', [MultipleController::class, 'edit'])->name('multiple.edit')->middleware('auth');
Route::put('/multipost/{id}', [MultipleController::class, 'update'])->name('multiple.update')->middleware('auth');
Route::delete('/multiple/{menu}', [MultipleController::class, 'destroy'])->name('multiple.hapus')->middleware('auth'); // Untuk menghapus menu

//Image
Route::get('/image/{id}', [ImageController::class, 'index'])->name('image.index')->middleware('auth');
Route::get('image/create/{id}', [ImageController::class, 'create'])->name('image.create')->middleware('auth');
Route::post('/image', [ImageController::class, 'store'])->name('image.store')->middleware('auth');
Route::get('/image/{id}/edit', [ImageController::class, 'edit'])->name('image.edit')->middleware('auth');
Route::put('/image/{id}', [ImageController::class, 'update'])->name('image.update')->middleware('auth');
Route::delete('/destroy/{id}', [ImageController::class, 'destroy'])->name('image.destroy')->middleware('auth');

//Slide
Route::get('/slide', [SlideController::class, 'index'])->name('slide')->middleware('auth');
Route::post('/slide', [SlideController::class, 'store'])->name('store.slide')->middleware('auth');
Route::delete('slide/{id}', [SlideController::class, 'destroy'])->name('slide.destroy');

//Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index')->middleware('auth');
Route::get('/kontak/create', [KontakController::class, 'create'])->name('kontak.create')->middleware('auth');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store')->middleware('auth');
Route::get('/kontak/{id}/edit', [KontakController::class, 'edit'])->name('kontak.edit')->middleware('auth');
Route::put('/kontak/{id}', [KontakController::class, 'update'])->name('kontak.update')->middleware('auth');
Route::delete('/kontak/{id}', [KontakController::class, 'destroy'])->name('kontak.destroy')->middleware('auth'); 
