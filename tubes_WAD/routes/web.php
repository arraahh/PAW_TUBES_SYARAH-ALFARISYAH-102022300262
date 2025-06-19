<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\BukuController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/kategori', [KategoriBukuController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriBukuController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriBukuController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriBukuController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriBukuController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriBukuController::class, 'destroy'])->name('kategori.destroy');
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');


