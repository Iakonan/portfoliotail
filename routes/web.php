<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bio', [BioController::class, 'index'])->name('bio');
