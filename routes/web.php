<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\MotorcycleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/motorcycle', [MotorcycleController::class, 'selectAllMotorcycles']);

Route::get('/brand', [BrandController::class, 'selectAllBrands']);

