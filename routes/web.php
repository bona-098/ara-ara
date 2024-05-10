<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\BappController;
use App\Models\cuti;
use App\Models\karyawan;
use App\Models\lembur;

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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// pengumuman
Route::resource('/pengumuman', PengumumanController::class);
// absen
Route::resource('/absen', AbsensiController::class);
// cuti
Route::resource('/cuti', cutiController::class);
// lembur
Route::resource('/lembur', lemburController::class);
// karyawan
Route::resource('/karyawan', karyawanController::class);
//BAPP
Route::resource('/bapp', BappController::class);
Route::get('/bappmanpower/print/{id}', [BappController::class, 'printPDF'])->name('bappmanpower.print');
Route::get('/bapp/detail/{id}', [BappController::class, 'detail'])->name('bapp.detail');
// Route::post('/bapp/detail/{id}', [BappController::class, 'storeBappManpower'])->name('bapp.storeBappManpower');
Route::post('/bapp/detail/{id}', [BappController::class, 'storeBappManpower'])->name('bapp.storeBappManpower');


// Route::get('/bapp/detail/{id}', [BappController::class, 'detail'])->name('bapp.storeBappManpower');
// Route::get('/bappmanpower/pdf', [BappController::class, 'printPDF']);
// Route::post('bapp/{bappId}/bappmanpower', [BappController::class, 'storeBappManpower'])->name('bapp.storeBappManpower');
