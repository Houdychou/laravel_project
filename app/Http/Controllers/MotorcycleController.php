<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MotorcycleController extends Controller
{
    public function index()
    {
        $motorcycles = DB::select('SELECT * FROM motorcycles');
        return view('motorcycle', ['motorcycles' => $motorcycles]);
    }
}
