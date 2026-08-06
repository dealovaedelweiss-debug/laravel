<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// browser membaca 4 method : GET, POST, PUT, DELETE, PATCH
// GET : lihat dan membaca data
// POST : mengirim data dari form, dan aksinya adalah insert
// PUT : mengirim data dari form yang aksinya untuk update
// DELETE : untuk menghapus data yang ada
// PATCH : sama seperti PUT namun hanya bisa 1 data kalo PUT bisa untuk semua data

Route::get('salam', [BelajarController::class, 'greeting']);
