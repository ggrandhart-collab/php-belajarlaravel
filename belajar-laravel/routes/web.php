<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//get, post, put, delete
Route::get('belajar', [BelajarController::class, 'index']);
Route::get('tambah', [BelajarController::class, 'tambah'])->name('tambah');
Route::get('kurang', [BelajarController::class, 'kurang'])->name('pengurangan');
Route::get('bagi', [BelajarController::class, 'bagi'])->name('bagi');
Route::get('Kali', [BelajarController::class, 'Kali'])->name('perkalian');
Route::post('actionTambah', [BelajarController::class, 'actionTambah'])->name('actionTambah');
Route::post('actionKali', [BelajarController::class, 'actionKali'])->name('actionKali');
Route::post('actionKurang', [BelajarController::class, 'actionKurang'])->name('actionKurang');
