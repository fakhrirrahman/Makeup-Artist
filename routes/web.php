<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\AdminReserController;



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


Route::get('/', [HomeController::class, 'index'])->name('awal.index');
Route::get('/awal/reservasi', [HomeController::class, 'reservasi'])->name('awal.reservasi');
Route::get('/awal/contact', [HomeController::class, 'contact'])->name('awal.contact');
Route::get('/awal/about', [HomeController::class, 'about'])->name('awal.about');
Route::get('/awal/harga', [HomeController::class, 'harga'])->name('awal.harga');
Route::get('/awal/berhasil', [HomeController::class, 'berhasil'])->name('awal.berhasil');

Route::get('/awal/konfir', [HomeController::class, 'konfir'])->name('awal.konfir');

Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

Route::get('/forgot-password', [LoginController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [LoginController::class, 'forgot_password_act'])->name('forgot-password-act');

Route::get('/validasi-forgot-password/{token}', [LoginController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [LoginController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');


Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');

    Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');
    Route::get('/reservasi/{reservasi}', [ReservasiController::class, 'show'])->name('reservasi.show');
    Route::get('/reservasi/{reservasi}/edit', [ReservasiController::class, 'edit'])->name('reservasi.edit');
    Route::put('/reservasi/{reservasi}', [ReservasiController::class, 'update'])->name('reservasi.update');
    Route::delete('/reservasi/{reservasi}', [ReservasiController::class, 'destroy'])->name('reservasi.destroy');

    Route::get('/bukti', [BuktiController::class, 'index'])->name('bukti.index');
    Route::get('/bukti/{bukti}', [BuktiController::class, 'show'])->name('bukti.show');
    Route::get('/bukti/{bukti}/edit', [BuktiController::class, 'edit'])->name('bukti.edit');
    Route::put('/bukti/{bukti}', [BuktiController::class, 'update'])->name('bukti.update');
    Route::delete('/bukti/{bukti}', [BuktiController::class, 'destroy'])->name('bukti.destroy');

    route::resource('/galeri', GaleriController::class);
    route::resource('/AdminReser', AdminReserController::class);
});

Route::middleware(['auth', 'user'])->group(function () {

    Route::resource('/user', UserController::class);
    Route::get('/user/{user}/payment', [UserController::class, 'payment'])->name('user.payment');
    Route::post('/create-transaction', [PaymentController::class, 'createTransaction']);
});

Route::get('/reservasi/get-existing-dates', [ReservasiController::class, 'getExistingDates']);

Route::get('/reservasi/create', [ReservasiController::class, 'create'])->name('reservasi.create');
Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');


Route::get('/bukti/create', [BuktiController::class, 'create'])->name('bukti.create');
Route::post('/bukti', [BuktiController::class, 'store'])->name('bukti.store');


Route::get('/home', [OrderController::class, 'index']);
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);
