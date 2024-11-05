<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\MultipleController;
use App\Http\Controllers\DashboardController;



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


Route::get('/menu', [MenuController::class, 'index'])->name('menu.index'); // Untuk daftar menu
Route::get('/createmenu', [MenuController::class, 'create'])->name('menu.create'); // Untuk membuka form tambah menu
Route::post('/post', [MenuController::class, 'store'])->name('menu.store'); // Untuk menyimpan menu baru
Route::get('/show-menu/{id}', [MenuController::class, 'show'])->name('multiple.show'); // Untuk membuka form edit menu
Route::get('/editmenu/{menu}', [MenuController::class, 'edit'])->name('menu.edit'); // Untuk membuka form edit menu
Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('menu.update'); // Untuk memperbarui data menu
Route::delete('/delete/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy'); // Untuk menghapus menu

Route::get('/multiple', [MultipleController::class, 'index'])->name('multiple.index'); // Untuk daftar menu
Route::get('/createmultiple', [MultipleController::class, 'create'])->name('multiple.create'); // Untuk membuka form tambah menu
Route::post('/postmultiple', [MultipleController::class, 'store'])->name('multiple.store'); // Untuk menyimpan menu baru
Route::get('/show-multiple/{id}', [MultipleController::class, 'show'])->name('multiple.show'); // Untuk membuka form edit menu
Route::get('/edit/{multiple}', [MultipleController::class, 'edit'])->name('multiple.edit'); // Untuk membuka form edit menu
Route::put('/menu/{multiple}', [MultipleController::class, 'update'])->name('multiple.update'); // Untuk memperbarui data menu
Route::delete('/delete/{multiple}', [MultipleController::class, 'destroy'])->name('multiple.destroy'); // Untuk menghapus menu

Route::post('/images', [EditorController::class, 'editor_image'])->name('store.image');

