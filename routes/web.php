<?php

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Admin\KompetensiController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\PublikasiController;
use App\Http\Controllers\AkademikController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/akademik', [AkademikController::class, 'index']);
Route::get('/detaildosen/{id}', [AkademikController::class, 'index']);

// admin
Route::get('/admin', function () {
    return view('admin.index');
});
// kompetensi
Route::get('/admin/kompetensi', [KompetensiController::class, 'index']);
Route::post('/admin/kompetensi/store', [KompetensiController::class, 'store']);
Route::post('/admin/kompetensi/destroy/{id}', [KompetensiController::class, 'destroy']);
Route::post('/admin/kompetensi/update/{id}', [KompetensiController::class, 'update']);
Route::post('/admin/kompetensi/search', [KompetensiController::class, 'cari']);
Route::post('/admin/kompetensi/trash', [KompetensiController::class, 'trash']);
// dosen
Route::get('/admin/dosen', [DosenController::class, 'index']);
Route::post('/admin/dosen/store', [DosenController::class, 'store']);
Route::post('/admin/dosen/destroy/{id}', [DosenController::class, 'destroy']);
Route::post('/admin/dosen/update/{id}', [DosenController::class, 'update']);
Route::post('/admin/dosen/update/{id}', [DosenController::class, 'update']);
Route::post('/admin/dosen/search', [DosenController::class, 'cari']);
Route::post('/admin/dosen/updatephoto/{id}', [DosenController::class, 'updatePhoto']);
// publikasi
Route::get('/admin/publikasi', [PublikasiController::class, 'index']);
