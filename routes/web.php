<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SAWController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
  Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'auth']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria');

   Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/create-kategori', [KategoriController::class, 'create'])->name('create-kategori');
Route::post('/create-kategori', [KategoriController::class, 'tambah']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::post('/kategori/{id}/edit', [KategoriController::class, 'update']);
Route::get('/kategori/{id}/hapus', [KategoriController::class, 'hapus']);

Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');
Route::get('/alternatif/kategori/{id}', [AlternatifController::class, 'byKategori'])->name('alternatif.kategori');
Route::get('/create-alternatif/{id}', [AlternatifController::class, 'create'])->name('create_alternatif');
Route::post('/create-alternatif', [AlternatifController::class, 'tambah'])->name('alternatif.tambah');


Route::get('/index-saw', [SAWController::class, 'index'])->name('index_saw');
Route::get('/saw/{id}', [SAWController::class, 'saw'])->name('saw');
});



