<?php

use App\Http\Controllers\AboutController;
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
    Route::get('/Dashboard', [DashboardController::class, 'dashboard']);

    Route::get('/Kriteria', [KriteriaController::class, 'index']);
    Route::post('/Kriteria/store', [KriteriaController::class, 'store']);
    Route::post('/kriteria/update/{id}', [KriteriaController::class, 'update']);
    Route::post('/kriteria/destroy/{id}', [KriteriaController::class, 'destroy']);
    Route::post('/subkriteria/update/{id}', [SubKriteriaController::class, 'update']);
    Route::post('/subkriteria/destroy/{id}', [SubKriteriaController::class, 'destroy']);

        Route::get('/Guideline', action: [DashboardController::class, 'guideline']);

    Route::get('/Member', action: [MemberController::class, 'index'])->name('member');
    
    Route::get('/SubKriteria', action: [SubKriteriaController::class, 'index']);
    Route::post('/SubKriteria/store', [SubKriteriaController::class, 'store']);
    
    Route::get('/Normalisasi', [NormalisasiController::class, 'index']);
    
    Route::get('/Pekerjaan', [PekerjaanController::class, 'index']);
    Route::post('/Pekerjaan/store', [PekerjaanController::class, 'store']);
    
    Route::get('/About', [AboutController::class, 'index']);

    Route::post('/About/update/{id}', [AboutController::class, 'update']);
    
    
});

require __DIR__.'/auth.php';