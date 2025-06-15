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






