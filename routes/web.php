<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\MotorcycleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/motorcycle', function() {
    $motorcycle = new MotorcycleController();
    return view("motorcycle", ["motorcycles" => $motorcycle->selectAllMotorcycles()]);
});

Route::get('/brand', function() {
    $brandController = new BrandController();
    return view("brand", ["brands" => $brandController->selectAllBrand()]);
});

