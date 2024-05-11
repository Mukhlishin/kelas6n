<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

route::get('/', function(){
    return view ('welcome');
});


Route::get('/Mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/Mahasiswa/add', [MahasiswaController::class, 'add']);
Route::post('/Mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/Mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);       
Route::post('/Mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/Mahasiswa/delete/{id}', [MahasiswaController::class, 'delete']);
Route::get('/Mahasiswa/cetak', [MahasiswaController::class, 'cetak']);

