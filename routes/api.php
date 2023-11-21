<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AnakAsuhController;
use App\Http\Controllers\JenisProgramController;
use App\Http\Controllers\ProgramDonaturController;
use App\Http\Controllers\ProgramPantiController;

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


Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');;

Route::apiResource('anak-asuh', AnakAsuhController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('jenis-program', JenisProgramController::class);
Route::apiResource('program-panti', ProgramPantiController::class);
Route::apiResource('program-donatur', ProgramDonaturController::class);





