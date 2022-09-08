<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\KelasController;

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

Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::get('/tambahpemesanan', [PemesananController::class, 'create']);
Route::post('/insert-pemesanan', [PemesananController::class, 'store']);
Route::get('/tampilan-pemesanan/{id}', [PemesananController::class, 'tampilan']);
Route::put('/updatedata/{id}', [PemesananController::class, 'update']);
Route::delete('/deletedata/{id}', [PemesananController::class, 'destroy']);
 