<?php

use App\Http\Controllers\MotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/moto',[MotoController::class,'index'])->name('moto.index');
Route::post('/moto/store',[MotoController::class,'store'])->name('moto.store');