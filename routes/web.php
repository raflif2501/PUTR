<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PengecekanController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middelware'=>['auth']], function(){
Route::resource('pengajuan', PengajuanController::class);
Route::resource('pengecekan', PengecekanController::class);
Route::resource('verifikasi', VerifikasiController::class);
Route::resource('keuangan', KeuanganController::class);
Route::get('/disetujui', [App\Http\Controllers\KeuanganController::class, 'disetujui'])->name('disetujui');
Route::get('/ditolak', [App\Http\Controllers\KeuanganController::class, 'ditolak'])->name('ditolak');
Route::get('/pengajuankeuangan', [App\Http\Controllers\KeuanganController::class, 'pengajuankeuangan'])->name('pengajuankeuangan');
Route::get('/rekap', [App\Http\Controllers\KeuanganController::class, 'rekap'])->name('rekap');
Route::resource('users', UserController::class);
});
Route::get('/cari', [App\Http\Controllers\SearchController::class, 'cari'])->name('cari');
