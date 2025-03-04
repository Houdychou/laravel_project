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
            return response()->json(["error" => "Motorcycle not found"], 404);
        }
        return response()->json($motorcycleDetails);
    }
}
