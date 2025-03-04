<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\MotorcycleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/motorcycle', function() {
    $motorcycle = new MotorcycleController();
    return $motorcycle->index();
});

Route::get('/brand', function() {
    $brand = new BrandController();
    return $brand->index();
    return
});

