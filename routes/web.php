<?php

use App\Http\Controllers\MotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/moto', [MotoController::class, 'index'])->name('moto.index');
Route::post('/moto/store', [MotoController::class, 'store'])->name('moto.store');
Route::get('/moto/destroy/{id}', [MotoController::class, 'destroy'])->name('moto.destroy');
Route::post('/moto/update{id}', [MotoController::class, 'edit'])->name('moto.edit');

Route::post('/moto/update', [MotoController::class, 'update'])->name('moto.update');
