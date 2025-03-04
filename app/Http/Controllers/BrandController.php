<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function index()
    {
        $brands = DB::select('SELECT * FROM brand');
        return $brands;
    }
}
