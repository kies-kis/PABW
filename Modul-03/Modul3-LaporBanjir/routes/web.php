<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', [LaporBanjirController::class, 'form']);

Route::get('/lapor-banjir', [LaporBanjirController::class, 'form'])->name('lapor-banjir.form');
Route::post('/lapor-banjir/kirim', [LaporBanjirController::class, 'kirim'])->name('lapor-banjir.kirim');
Route::get('/lapor-banjir/daftar', [LaporBanjirController::class, 'daftar'])->name('lapor-banjir.daftar');
