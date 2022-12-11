<?php

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Admin\KompetensiController;
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

// admin
Route::get('/admin', function () {
    return view('admin.index');
});
// kompetensi
Route::get('/admin/kompetensi', [KompetensiController::class, 'index']);
Route::post('/admin/kompetensi/store', [KompetensiController::class, 'store']);
Route::post('/admin/kompetensi/destroy/{id}', [KompetensiController::class, 'destroy']);
Route::post('/admin/kompetensi/update/{id}', [KompetensiController::class, 'update']);