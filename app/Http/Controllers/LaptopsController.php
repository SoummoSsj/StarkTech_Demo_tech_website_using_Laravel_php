<?php

namespace App\Http\Controllers;

use App\Models\laptop;
use Illuminate\Http\Request;


class LaptopsController extends Controller
{
    public function index(Request $request)
    {
        $query = laptop::query();

        // Filter by type if type is provided in the request
        if ($request->has('Type')) {
            $type = $request->input('Type');
            $query->where('type', $type);
        }

        // Filter by brand if brand is provided in the request
        if ($request->has('brand')) {
            $brand = $request->input('brand');
            $query->where('brand', $brand);
        }

        $products = $query->paginate(15);

        return view('products.index', compact('products'));
    }
    public function sindex(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = laptop::where('name', 'like', '%' . $keyword . '%')->paginate(15);

        return view('products.index', compact('products'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = laptop::where('name', 'like', '%' . $keyword . '%')->limit(5)->get();

        return response()->json($products);
    }

    public function lindex()
    {
        $laptops = laptop::all();
        return view('product.index', compact('products'));
    }
}
