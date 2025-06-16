<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\KomunitasController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login-form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register-form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('landingpage'); // landingpage.blade.php
})->name('home');

Route::get('/beranda', function () {
    return view('beranda'); // dashboard.blade.php
})->middleware('auth')->name('beranda');

Route::get('/tanamanku', [TanamanController::class, 'tanamanku'])->middleware('auth')->name('tanamanku');

Route::resource('tanaman', TanamanController::class);
Route::get('/tanaman/{id}/atur', [TanamanController::class, 'jadwal'])->name('tanaman.jadwal');
Route::patch('/tanaman/{id}/jadwal', [TanamanController::class, 'updateJadwal'])->name('tanaman.updateJadwal');
Route::get('/komunitas', [KomunitasController::class, 'index'])->name('komunitas');
Route::get('/komunitas/messages', fn() => view('layout.komunitas.messages'))->name('komunitas.messages');
Route::get('/friends', function () {
    return view('layout.komunitas.friends');
})->name('friends');
Route::get('/komunitas/friends', function () {
    return view('layout.komunitas.friends');
})->name('komunitas.friends');
Route::get('/komunitas/media', fn() => view('layout.komunitas.media'))->name('komunitas.media');
Route::get('/komunitas/settings', fn() => view('layout.komunitas.settings'))->name('komunitas.settings');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
// routes/web.php
Route::get('/komunitas/media', function () {
    return view('komunitas.media');
})->name('komunitas.media');

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');
