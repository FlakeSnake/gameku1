<?php

use App\Http\Controllers\ConsoleGameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobileGameController;
use App\Http\Controllers\PCGameController;
use App\Http\Controllers\StreamingController;
use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('halaman_utama.index');

Route::get('/mobile', [MobileGameController::class, 'index'])->name('mobile.index');

Route::get('/pc', [PCGameController::class, 'index'])->name('pc.index');

Route::get('/console', [ConsoleGameController::class, 'index'])->name('console.index');

Route::get('/streaming', [StreamingController::class, 'index'])->name('streaming.index');

Route::get('/voucher', [VoucherController::class, 'index'])->name('voucher.index');

Auth::routes();

Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
