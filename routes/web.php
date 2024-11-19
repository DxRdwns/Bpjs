<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\SurveiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/Tentang', [TentangController::class, 'index']);
Route::get('/Petunjuk', [DashboardController::class, 'petunjuk']);

Route::get('/Survei', [SurveiController::class, 'index']);
Route::post('/Survei/result', [SurveiController::class, 'result']);

Route::middleware(['auth'])->group(function () {
    // Route yang membutuhkan autentikasi
    Route::get('/Kriteria', [KriteriaController::class, 'index']);
    Route::post('/Kriteria/store', [KriteriaController::class, 'store']);
    
    Route::get('/Member', [MemberController::class, 'index'])->name('member');
    
    Route::get('/SubKriteria', [SubKriteriaController::class, 'index']);
    Route::post('/SubKriteria/store', [SubKriteriaController::class, 'store']);
    
    Route::get('/Normalisasi', [NormalisasiController::class, 'index']);
    
    Route::get('/Pekerjaan', [PekerjaanController::class, 'index']);
    Route::post('/Pekerjaan/store', [PekerjaanController::class, 'store']);
    
    Route::get('/Peserta', [PesertaController::class, 'index']);
    Route::post('/Peserta/store', [PesertaController::class, 'store']);
    
    
});

require __DIR__.'/auth.php';