<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BroodjeController;
use App\Http\Controllers\WinkelmandjeController;

Route::get('/', [BroodjeController::class, 'index'])->name('broodjes.index');

Route::post('/winkelmandje/toevoegen', [WinkelmandjeController::class, 'toevoegen'])->name('winkelmandje.toevoegen');
Route::get('/winkelmandje', [WinkelmandjeController::class, 'index'])->name('winkelmandje.index');
Route::post('/winkelmandje/verwijder', [WinkelmandjeController::class, 'verwijder'])->name('winkelmandje.verwijder');

Route::get('/openingstijden', function () {
    return view('openingstijden');
})->name('openingstijden');
