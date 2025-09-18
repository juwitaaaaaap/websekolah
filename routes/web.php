<?php

use App\Http\Controllers\EskulController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profil',[ProfilController::class, 'profil']);

Route::get('/eskul', [EskulController::class,'eskul']);

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak', function () {
    return view('kontak');
});
