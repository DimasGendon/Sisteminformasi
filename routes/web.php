<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\MultipleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Http\Controllers\GuestController;


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
// Route::get('/', [DashboardController::class, 'index'])->name('dashboard'); // Untuk daftar menu

Auth::routes();


Route::get('/admin', function () {
    return view('layout.admin');
});

// Route::get('/user', function () {
//     return view('layout.user');
    Route::get('/guest', [GuestController::class, 'index'])->name(name: 'guest');
    Route::get('/guest/single//{id}', [GuestController::class, 'showSingle_data'])->name(name: 'showSingle_data.guest');
    Route::get('/guest/multiple/{id}', [GuestController::class, 'showMultiple_data'])->name(name: 'showMultiple_data.guest');

// });


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/image/{id}', [ImageController::class, 'index'])->name('image.index')->middleware('auth');
Route::get('image/create/{id}', [ImageController::class, 'create'])->name('image.create')->middleware('auth');
Route::post('/image', [ImageController::class, 'store'])->name('image.store')->middleware('auth');
Route::get('/image/{id}/edit', [ImageController::class, 'edit'])->name('image.edit')->middleware('auth');
Route::put('/image/{id}', [ImageController::class, 'update'])->name('image.update')->middleware('auth');
Route::delete('/destroy/{id}', [ImageController::class, 'destroy'])->name('image.destroy')->middleware('auth');




Route::post('/login', [LoginController::class, 'store'])->name('store.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index')->middleware('auth'); // Untuk daftar menu
Route::get('/createmenu', [MenuController::class, 'create'])->name('menu.create')->middleware('auth'); // Untuk membuka form tambah menu
Route::post('/post', [MenuController::class, 'store'])->name('menu.store')->middleware('auth'); // Untuk menyimpan menu baru
Route::get('/show-menu/{id}', [MenuController::class, 'show'])->name('multiple.show')->middleware('auth'); // Untuk membuka form edit menu
Route::get('/editmenu/{menu}', [MenuController::class, 'edit'])->name('menu.edit')->middleware('auth'); // Untuk membuka form edit menu
Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('menu.update')->middleware('auth'); // Untuk memperbarui data menu
Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy')->middleware('auth'); // Untuk menghapus menu
Route::post('/images', [EditorController::class, 'editor_image'])->name('store.image')->middleware('auth');
Route::get('/multiple/{id}', [MenuController::class, 'showMultiple'])->name('multiple.index')->middleware('auth'); // Untuk menghapus menu

// Route::get('/multiple/{menu}', [MultipleController::class, 'index'])->name('multiple.index')->middleware('auth'); // Untuk daftar menu
Route::get('/create/{menu}', [MultipleController::class, 'create'])->name('multiple.create')->middleware('auth');
Route::post('/postmultiple', [MultipleController::class, 'store'])->name('multiple.store')->middleware('auth'); // Untuk menyimpan menu baru
Route::get('/show-multiple/{menu}', [MultipleController::class, 'show'])->name('multiple.show')->middleware('auth'); // Untuk membuka form edit menu
Route::get('/multiple/{id}/edit', [MultipleController::class, 'edit'])->name('multiple.edit')->middleware('auth');
Route::put('/multipost/{id}', [MultipleController::class, 'update'])->name('multiple.update')->middleware('auth');
Route::delete('/multiple/{menu}', [MultipleController::class, 'destroy'])->name('multiple.hapus')->middleware('auth'); // Untuk menghapus menu

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
