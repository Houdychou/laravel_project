<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
class MotorcycleController extends Controller
{
    public function selectAllMotorcycles()
    {
        $motorcycles = Motorcycle::all();
        return view('motorcycle', compact('motorcycles'));
    }

    public function selectOneMotorcycle($id) {
        $motorcycleDetails = Motorcycle::query()->find($id);
        return view('motorcycle-details', compact('motorcycleDetails'));
    }
}
