<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PesertaController;
Route::get('/', [DashboardController::class, 'index']);
Route::get('/Kriteria', action: [KriteriaController::class, 'index']);
Route::post('/Kriteria/store', action: [KriteriaController::class, 'store']);

Route::get('/SubKriteria', action: [SubKriteriaController::class, 'index']);
Route::post('/SubKriteria/store', action: [SubKriteriaController::class, 'store']);

Route::get('/Normalisasi', action: [NormalisasiController::class, 'index']);


Route::get('/Pekerjaan', action: [PekerjaanController::class, 'index']);
Route::post('/Pekerjaan/store', action: [PekerjaanController::class, 'store']);

Route::get('/Peserta', action: [PesertaController::class, 'index']);
Route::post('/Peserta/store', action: [PesertaController::class, 'store']);