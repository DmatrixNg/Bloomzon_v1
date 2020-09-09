<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('front.manufacturers', [
            'manufacturers' => $manufacturers
        ]);
    }

    public function show(Request $request,$id)
    {

        $manufacturer = Manufacturer::findOrFail($request->id);
        $products = Product::where('seller_id', $request->id)->where('product_type', 'manufacturer')->get();

        return view('front.manufacturer-details', [
            'manufacturer' => $manufacturer,
            'products'     => $products,
        ]);
    }

}
