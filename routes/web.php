<?php

use App\Http\Controllers\DaftarKaryawanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//return view('welcome');
//});

//Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id) {
    return 'user dengan id ' . $id;
});

// Route langsung untuk menampilkan daftar karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::prefix('admin')->group(function () {
    route::get('/dashboard', function () {
        return 'admin dashboard';
    });

    Route::get('/users', function () {
        return 'admin users';
    });
});
//Route::get('/listbarang/{id}/{$nama}', function ($id, $nama) {
//return view('list_barang', compact('id', 'nama'));
//});

Route::get('listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/pegawai', [DaftarKaryawanController::class, 'tampilkan']);
Route::view('/p5', 'P5');

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
