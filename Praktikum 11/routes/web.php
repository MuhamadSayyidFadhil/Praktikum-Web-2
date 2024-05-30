<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/periksa', function () {
    return view('periksa');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::delete('/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
Route::get('/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/periksa', [PeriksaController::class, 'index']);
Route::get('/periksa', [PeriksaController::class, 'index'])->name('periksas.index');
Route::get('/periksa/create', [PeriksaController::class, 'create'])->name('periksas.create');
Route::post('/periksa/store', [PeriksaController::class, 'store'])->name('periksas.store');
Route::get('/periksa/{periksa}', [PeriksaController::class, 'show'])->name('periksas.show');
Route::get('/periksa/{periksa}/edit', [PeriksaController::class, 'edit'])->name('periksas.edit');
Route::put('/periksa/{periksa}', [PeriksaController::class, 'update'])->name('periksas.update');
Route::delete('/periksa/{periksa}', [PeriksaController::class, 'destroy'])->name('periksas.destroy');

Route::get('/unit_kerja', [UnitKerjaController::class, 'index']);
Route::get('/unit_kerja', [UnitKerjaController::class, 'index'])->name('unit_kerjas.index');
Route::get('/unit_kerja/create', [UnitKerjaController::class, 'create'])->name('unit_kerjas.create');
Route::post('/unit_kerja/store', [UnitKerjaController::class, 'store'])->name('unit_kerjas.store');
Route::get('/unit_kerja/{unit_kerja}', [UnitKerjaController::class, 'show'])->name('unit_kerjas.show');
Route::get('/unit_kerja/{unit_kerja}/edit', [UnitKerjaController::class, 'edit'])->name('unit_kerjas.edit');
Route::put('/unit_kerja/{unit_kerja}', [UnitKerjaController::class, 'update'])->name('unit_kerjas.update');
Route::delete('/unit_kerja/{unit_kerja}', [UnitKerjaController::class, 'destroy'])->name('unit_kerjas.destroy');

Route::get('/dokter', [DokterController::class, 'index']);
Route::get('/dokter', [DokterController::class, 'index'])->name('dokters.index');
Route::get('/dokter/create', [DokterController::class, 'create'])->name('dokters.create');
Route::post('/dokter/store', [DokterController::class, 'store'])->name('dokters.store');
Route::get('/dokter/{dokter}', [DokterController::class, 'show'])->name('dokters.show');
Route::get('/dokter/{dokter}/edit', [DokterController::class, 'edit'])->name('dokters.edit');
Route::put('/dokter/{dokter}', [DokterController::class, 'update'])->name('dokters.update');
Route::delete('/dokter/{dokter}', [DokterController::class, 'destroy'])->name('dokters.destroy');

