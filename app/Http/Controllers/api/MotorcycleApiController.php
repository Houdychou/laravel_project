<?php
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Motorcycle;

class MotorcycleApiController extends Controller
{
    public function selectAllMotorcycles()
    {
        $motorcycles = Motorcycle::all();
        return response()->json($motorcycles);
    }

    public function selectMotorcycleById($id)
    {
        $motorcycleDetails = Motorcycle::query()->find($id);
        if (!$motorcycleDetails) {
            abort(404);
        }
        return view('motorcycle-details', compact('motorcycleDetails'));
    }
}
