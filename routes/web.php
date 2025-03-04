<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\MotorcycleController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/motorcycle', [MotorcycleController::class, 'selectAllMotorcycles']);
Route::get("/motorcycle/{id}", [MotorcycleController::class, 'selectMotorcycleById']);

Route::get('/brand', [BrandController::class, 'selectAllBrands']);
Route::get("/brand/{id}", [BrandController::class, 'selectBrandById']);
