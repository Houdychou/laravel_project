<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MotorcycleController extends Controller
{
    public function selectAllMotorcycles()
    {
        return DB::select('SELECT * FROM motorcycles');
    }
}
