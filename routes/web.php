<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PegawaiController;
Route::get('/', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai/create/store', [PegawaiController::class, 'store'])->name('pegawai.create');
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/edit/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'delete']);

use App\Http\Controllers\DocumentController;
Route::get('/document', [DocumentController::class, 'index']);

// API
use App\Http\Controllers\api\ApiPegawaiController;
Route::get('/api/pegawai', [ApiPegawaiController::class, 'index']);
