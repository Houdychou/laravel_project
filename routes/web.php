<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\MotorcycleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::view('/', 'welcome');

Route::get('/motorcycle', [MotorcycleController::class, 'selectAllMotorcycles']);
Route::get("/motorcycle/{id}", [MotorcycleController::class, 'selectMotorcycleById']);

Route::get('/brand', [BrandController::class, 'selectAllBrands']);
Route::get("/brand/{id}", [BrandController::class, 'selectBrandById']);


Route::get('/send-test-email', function () {
    Mail::to('hchouchouh@edenschool.fr')->send(new Testmail());
    return 'Test email sent!';
});
