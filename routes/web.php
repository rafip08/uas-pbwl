<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/penerima', [App\Http\Controllers\PenerimaController::class, 'index']);
Route::get('/penerima/create', [App\Http\Controllers\PenerimaController::class, 'create']);
Route::post('/penerima', [App\Http\Controllers\PenerimaController::class, 'store']);
Route::get('/penerima/edit/{id}', [App\Http\Controllers\PenerimaController::class, 'edit']);
Route::patch('/penerima/{id}', [App\Http\Controllers\PenerimaController::class, 'update']);
Route::delete('/penerima/{id}', [App\Http\Controllers\PenerimaController::class, 'destroy']);

Route::get('/jenis', [App\Http\Controllers\JenisController::class, 'index']);
Route::get('/jenis/create', [App\Http\Controllers\JenisController::class, 'create']);
Route::post('/jenis', [App\Http\Controllers\JenisController::class, 'store']);
Route::get('/jenis/edit/{id}', [App\Http\Controllers\JenisController::class, 'edit']);
Route::patch('/jenis/{id}', [App\Http\Controllers\JenisController::class, 'update']);
Route::delete('/jenis/{id}', [App\Http\Controllers\JenisController::class, 'destroy']);

Route::get('/penyaluran', [App\Http\Controllers\PenyaluranController::class, 'index']);
Route::get('/penyaluran/create', [App\Http\Controllers\PenyaluranController::class, 'create']);
Route::post('/penyaluran', [App\Http\Controllers\PenyaluranController::class, 'store']);
Route::get('/penyaluran/edit/{id}', [App\Http\Controllers\PenyaluranController::class, 'edit']);
Route::patch('/penyaluran/{id}', [App\Http\Controllers\PenyaluranController::class, 'update']);
Route::delete('/penyaluran/{id}', [App\Http\Controllers\PenyaluranController::class, 'destroy']);