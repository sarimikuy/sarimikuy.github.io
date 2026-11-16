<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinjamController;

// Rute Dasar[cite: 2]
Route::get('/', function () { return view('home'); });
Route::get('/produk', function () { return view('produk'); });
Route::get('/login', function () { return view('login'); });
Route::get('/admin', function () { return view('admin'); });

// Sistem Perpustakaan
Route::get('/buku', function () { return view('buku.index'); });
Route::get('/buku/{id}', function (string $id) { return view('buku.detail', ['id' => $id]); })->whereNumber('id');
Route::get('/kategori/{nama?}', function (?string $nama = 'umum') { return view('kategori.index', ['nama' => $nama]); });
Route::get('/anggota/profil', function () { return view('anggota.profil'); })->name('anggota.profil');
Route::get('/pinjam', [PinjamController::class, 'index']);