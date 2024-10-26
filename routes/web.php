<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});      //rotta della home

Route::get('/bio', [BioController::class, 'index'])->name('bio');  //rotta della bio

Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');  //parametrica dei progetti

Route::get('/contact', [ContactController::class, 'contatti'])->name('contacts'); //rotta contatti