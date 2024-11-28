<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

Route::get('/create/{locale}', [MahasiswaController::class, 'create'])->name('create');
Route::post('/store/{locale}', [MahasiswaController::class, 'store'])->name('store');
