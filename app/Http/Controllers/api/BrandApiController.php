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
        return response()->json($brandDetails);
    }
}
