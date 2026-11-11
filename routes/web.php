
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardCotroller;
use App\Http\Controllers\PelangganController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Home
Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

// Halaman Dashboard
Route::get('/dashboard', [DashboardCotroller::class, 'index'])
    ->name('dashboard');

// CRUD Pelanggan
Route::resource('pelanggan', PelangganController::class);
