<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route untuk mengirim pesan kontak (contoh, perlu implementasi backend)
Route::post('/contact', function () {
    // Implementasi logika pengiriman email atau penyimpanan pesan di sini
    // Misalnya menggunakan Mail::send atau menyimpan ke database

    return back()->with('success', 'Pesan Anda telah terkirim!');
})->name('contact.submit');