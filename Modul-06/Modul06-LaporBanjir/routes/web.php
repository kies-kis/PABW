<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LaporBanjirController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Halaman publik
|--------------------------------------------------------------------------
| Warga tetap dapat membuka form dan mengirim laporan tanpa login.
*/
Route::get('/', [LaporBanjirController::class, 'form']);
Route::get('/lapor-banjir', [LaporBanjirController::class, 'form'])->name('lapor-banjir.form');
Route::post('/lapor-banjir/kirim', [LaporBanjirController::class, 'kirim'])->name('lapor-banjir.kirim');

/*
|--------------------------------------------------------------------------
| Authentication manual (tanpa Breeze)
|--------------------------------------------------------------------------
| Route guest hanya untuk pengguna yang belum login. Route login wajib
| diberi nama "login" agar middleware auth dapat mengarahkan ke sini.
*/
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Halaman pengelolaan (wajib login)
|--------------------------------------------------------------------------
| Daftar laporan dan profil petugas hanya dapat diakses setelah login.
*/
Route::middleware('auth')->group(function () {
    Route::get('/lapor-banjir/daftar', [LaporBanjirController::class, 'daftar'])->name('lapor-banjir.daftar');
    Route::get('/profil', [PetugasController::class, 'profil'])->name('petugas.profil');
});
