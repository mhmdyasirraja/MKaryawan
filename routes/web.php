<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id) {
    return 'user dengan id ' . $id;
});
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

