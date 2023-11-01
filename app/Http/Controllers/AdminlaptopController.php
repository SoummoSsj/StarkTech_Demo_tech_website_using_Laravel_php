<?php

namespace App\Http\Controllers;

use App\Models\laptop;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminlaptopController extends Controller
{
    //
    public function __construct()
{
    $this->middleware(function ($request, $next) {
        if (!Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    });
}
public function hme()
    {
        // Logic for displaying the admin dashboard
        // Retrieve the products and pass them to the view
        
        return view('admin.choose');
    }

      public function index()
    {
        // Logic for displaying the admin dashboard
        // Retrieve the products and pass them to the view
        $products = laptop::all();
        return view('admin.dashboard', compact('products'));
    }

    public function create()
    {
        // Logic for displaying the create product form
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Logic for storing a new product
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            // Add more validation rules as per your requirements
        ]);

        // Create a new product instance
        $product = new laptop();
        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        // Set other product properties as needed

        // Save the product to the database
        $product->save();

        // Redirect back to the admin dashboard or show a success message
        return redirect()->route('admin.cashboard')->with('success', 'Product created successfully.');
    }

    public function edit(laptop $product)
    {
        // Logic for displaying the edit product form
        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, laptop $product)
    {
        // Logic for updating a product
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            // Add more validation rules as per your requirements
        ]);

        // Update the product properties
        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        // Update other product properties as needed

        // Save the updated product to the database
        $product->save();

        // Redirect back to the admin dashboard or show a success message
        return redirect()->route('admin.cashboard')->with('success', 'Product updated successfully.');
    }

    public function destroy(laptop $product)
    {
        // Logic for deleting a product
        // Delete the product from the database
        $product->delete();

        // Redirect back to the admin dashboard or show a success message
        return redirect()->route('admin.cashboard')->with('success', 'Product deleted successfully.');
    }

}
