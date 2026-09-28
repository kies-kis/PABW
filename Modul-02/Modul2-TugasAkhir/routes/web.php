<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasAkhirController;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/login', [TugasAkhirController::class, 'login'])->name('login');
Route::get('/register', [TugasAkhirController::class, 'register'])->name('register');
Route::get('/home', [TugasAkhirController::class, 'home'])->name('home');
Route::get('/warisan', [TugasAkhirController::class, 'warisan'])->name('warisan');
Route::get('/peta', [TugasAkhirController::class, 'peta'])->name('peta');
Route::get('/kuliner', [TugasAkhirController::class, 'kuliner'])->name('kuliner');
Route::get('/kafe', [TugasAkhirController::class, 'kafe'])->name('kafe');
Route::get('/event', [TugasAkhirController::class, 'event'])->name('event');
Route::get('/eduction', [TugasAkhirController::class, 'eduction'])->name('eduction');
Route::get('/profil', [TugasAkhirController::class, 'profil'])->name('profil');
Route::get('/pengaturan', [TugasAkhirController::class, 'pengaturan'])->name('pengaturan');
Route::get('/keluar', [TugasAkhirController::class, 'keluar'])->name('keluar');

Route::get('/review-sederhana', [TugasAkhirController::class, 'reviewForm'])->name('review.form');
Route::post('/review-sederhana/proses', [TugasAkhirController::class, 'reviewProses'])->name('review.proses');
