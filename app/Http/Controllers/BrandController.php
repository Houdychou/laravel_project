<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
class BrandController extends Controller
{
    public function selectAllBrand()
    {
       return DB::select('SELECT * FROM brand');
    }
}
