<?php

use App\Http\Controllers\API\BiodataController;
use App\Http\Controllers\API\KelasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/kelas', [KelasController::class, 'store']);
Route::get('/kelas', [KelasController::class, 'getKelas']);

Route::get('/siswa', [BiodataController::class, 'getAllSiswa']);
