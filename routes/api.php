<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\BrandApiController;
use App\Http\Controllers\api\MotorcycleApiController;

Route::get('/motorcycle',[MotorcycleApiController::class, 'selectAllMotorcycles']);
Route::get('/motorcycle/{id}', [MotorcycleApiController::class, 'selectMotorcycleById']);

Route::get('/brand', [BrandApiController::class, 'selectAllBrands']);
Route::get('/brand/{id}', [BrandApiController::class, 'selectBrandById']);
