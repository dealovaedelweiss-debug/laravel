<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\PesertaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// browser membaca 4 method : GET, POST, PUT, DELETE, PATCH
// GET : lihat dan membaca data
// POST : mengirim data dari form, dan aksinya adalah insert
// PUT : mengirim data dari form yang aksinya untuk update
// DELETE : untuk menghapus data yang ada
// PATCH : sama seperti PUT namun hanya bisa 1 data kalo PUT bisa untuk semua data aksi nya update
Route::get('counting', [BelajarController::class, 'index']);

Route::get('salam', [BelajarController::class, 'greeting']);

Route::get('hitung-tambah', [BelajarController::class, 'tambah'])->name('hitung-tambah');
// kalau menggunakan route di views harus menggunakan name seperti diatas harus sama dengan yang di route
Route::get('hitung-kurang', [BelajarController::class, 'indexKurang']);
Route::post('action-kurang', [BelajarController::class, 'kurang'])->name('action-kurang');
// get untuk memunculkan hasil
Route::get('hitung-kali', [BelajarController::class, 'indexkali']);
Route::post('action-kali', [BelajarController::class, 'kali'])->name('action-kali
');
Route::get('hitung-bagi', [BelajarController::class, 'bagi']);

Route::get('peserta', [PesertaController::class, 'index']);
Route::get('create', [PesertaController::class, 'create']);
Route::post('store-peserta', [PesertaController::class, 'store']);
