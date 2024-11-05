<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EditorController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index'); // Untuk daftar menu
Route::get('/createmenu', [MenuController::class, 'create'])->name('menu.create'); // Untuk membuka form tambah menu
Route::post('/menu', [MenuController::class, 'store'])->name('menu.store'); // Untuk menyimpan menu baru
Route::get('/editmenu/{menu}', [MenuController::class, 'edit'])->name('menu.edit'); // Untuk membuka form edit menu
Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('menu.update'); // Untuk memperbarui data menu
Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy'); // Untuk menghapus menu

Route::post('/images', [EditorController::class, 'editor_image'])->name('store.image');

