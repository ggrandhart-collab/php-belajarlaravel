<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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




Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login']);
    Route::post('/actionLogin', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actionLogin');

    Route::resource('dashboard', DashboardController::class);
    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::get('/settings', [\App\Http\Controllers\SettingController::class, 'index'])->name('settings');
    Route::post('/settings', [\App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');
});
