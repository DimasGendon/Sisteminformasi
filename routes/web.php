<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\MultipleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SubmenuController;
use Illuminate\Support\Facades\Auth;



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

Auth::routes();

Route::get('/admin', function () {
    return view('layout.admin');
});
// Route::get('/', function () {
//     return view('home');
// });

Route::post('/login', [LoginController::class, 'store'])->name('store.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index'); // Untuk daftar menu
Route::get('/createmenu', [MenuController::class, 'create'])->name('menu.create'); // Untuk membuka form tambah menu
Route::post('/post', [MenuController::class, 'store'])->name('menu.store'); // Untuk menyimpan menu baru
Route::get('/show-menu/{id}', [MenuController::class, 'show'])->name('multiple.show'); // Untuk membuka form edit menu
Route::get('/editmenu/{menu}', [MenuController::class, 'edit'])->name('menu.edit'); // Untuk membuka form edit menu
Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('menu.update'); // Untuk memperbarui data menu
Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy'); // Untuk menghapus menu
Route::get('/multiple/{id}', [MenuController::class, 'showMultiple'])->name('multiple.index'); // Untuk menghapus menu

// Route::get('/multiple/{menu}', [MultipleController::class, 'index'])->name('multiple.index'); // Untuk daftar menu
Route::get('/create/{menu}', [MultipleController::class, 'create'])->name('multiple.create');
Route::post('/postmultiple', [MultipleController::class, 'store'])->name('multiple.store'); // Untuk menyimpan menu baru
Route::get('/show-multiple/{menu}', [MultipleController::class, 'show'])->name('multiple.show'); // Untuk membuka form edit menu
Route::get('/multiple/{id}/edit', [MultipleController::class, 'edit'])->name('multiple.edit');
Route::put('/multipost/{id}', [MultipleController::class, 'update'])->name('multiple.update');
Route::delete('/multiple/{menu}', [MultipleController::class, 'destroy'])->name('multiple.hapus'); // Untuk menghapus menu

Route::post('/images', [EditorController::class, 'editor_image'])->name('store.image');


Route::get('submenus', [SubmenuController::class, 'index'])->name('submenus.index');
Route::get('submenus/create', [SubmenuController::class, 'create'])->name('submenus.create');
Route::post('submenus', [SubmenuController::class, 'store'])->name('submenus.store');
Route::get('submenus/{submenu}', [SubmenuController::class, 'show'])->name('submenus.show');
Route::get('submenus/{submenu}/edit', [SubmenuController::class, 'edit'])->name('submenus.edit');
Route::put('submenus/{submenu}', [SubmenuController::class, 'update'])->name('submenus.update');
Route::delete('submenus/{submenu}', [SubmenuController::class, 'destroy'])->name('submenus.destroy');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
