<?php

use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JatahcutiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengajuancutiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Correct route definition for Pengajuancuti create
    Route::get('admin/Pengajuancuti/create', [PengajuancutiController::class, 'create'])->name('pengajuancuti.create');

    Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi.index')->middleware('admin');

    Route::get('/Jatahcuti', [JatahcutiController::class, 'index'])->name('jatahcuti.index');
    Route::get('admin/Jatahcuti/edit/{id}', [JatahcutiController::class, 'edit']);
    Route::get('/Jatahcuti/update/{id}', [JatahcutiController::class, 'update']);
    Route::get('/jatahcuti/edit/{id}', [JatahcutiController::class, 'edit'])->name('jatahcuti_edit');
    Route::put('admin/Jatahcuti/update/{id}', [JatahcutiController::class, 'update'])->name('jatahcuti.update');
    Route::delete('/Jatahcuti/delete/{id}', [JatahcutiController::class, 'destroy'])->name('jatahcuti_destroy');
    Route::resource('jatahcuti', JatahcutiController::class);

    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');

    Route::get('/Pengajuancuti', [PengajuancutiController::class, 'index'])->name('pengajuancuti.index');
    Route::get('admin/Pengajuancuti', [PengajuancutiController::class, 'index'])->name('pengajuancuti.index');
    Route::post('admin/Pengajuancuti', [PengajuancutiController::class, 'store'])->name('pengajuancuti.store');

});

require __DIR__.'/auth.php';
