<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', [MahasiswaController::class, 'index']);

Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('index');
    Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
    Route::post('/store', [MahasiswaController::class, 'store'])->name('store');
    Route::get('/{mahasiswa}', [MahasiswaController::class, 'show'])->name('show');
    Route::get('/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('edit');
    Route::put('/{mahasiswa}', [MahasiswaController::class, 'update'])->name('update');
    Route::delete('/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('destroy');
});
