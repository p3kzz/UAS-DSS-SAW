<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SAWController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/create-kategori', [KategoriController::class, 'create'])->name('create-kategori');

Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');
Route::get('/create-alternatif', [AlternatifController::class, 'create'])->name('create_alternatif');

Route::get('/index-saw', [SAWController::class, 'index'])->name('index_saw');
Route::get('/saw', [SAWController::class, 'saw'])->name('saw');


Route::get('/login', [AuthController::class, 'auth'])->name('auth');

