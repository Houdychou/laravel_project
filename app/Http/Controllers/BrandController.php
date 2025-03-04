<?php
namespace App\Http\Controllers;

use App\Models\Brand;
class BrandController extends Controller
{
    public function selectAllBrands()
    {
        $brands = Brand::all();
        return view('brand', compact('brands'));
    }

    public function selectBrandById($id) {
        $brandDetails = Brand::query()->find($id);
        return view('brand-details', compact('brandDetails'));
    }
}
