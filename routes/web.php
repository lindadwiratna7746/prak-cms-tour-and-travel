<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketWisataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paket-wisata', [PaketWisataController::class, 'index']);