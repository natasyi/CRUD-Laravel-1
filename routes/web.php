<?php

//use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mahasiswaController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('/mahasiswa', mahasiswaController::class);
