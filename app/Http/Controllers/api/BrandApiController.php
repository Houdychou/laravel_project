<?php
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
class BrandApiController extends Controller
{
    public function selectAllBrands()
    {
        $brands = Brand::all();
        return response()->json($brands);
    }

    public function selectBrandById($id) {
        $brandDetails = Brand::query()->find($id);
        if(!$brandDetails) {
            return response()->json(["error" => "Brand not found"], 404);
        }
        return response()->json($brandDetails);
    }
}
