<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\ObatPenyakitController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\SekolahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('obat', ObatController::class);
Route::resource('penyakit', PenyakitController::class);

Route::get('obat-penyakit', [ObatPenyakitController::class, 'index']);
Route::post('obat-penyakit', [ObatPenyakitController::class, 'store']);


Route::resource('sekolah', SekolahController::class);

