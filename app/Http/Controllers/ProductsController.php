<?php

namespace App\Http\Controllers;

use App\Models\components;
use App\Models\Laptop;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Laravel\Cashier\Http\Controllers\WebhookController;
use Stripe\Charge;
use Stripe\Stripe;




class ProductsController extends Controller
{
   
    public function index(Request $request)
    {
        $query = Product::query();
        $laptopQuery = Laptop::query();
        $compquery = components::query();

        // Filter by type if type is provided in the request
        if ($request->has('type')) {
            $type = $request->input('type');
            $query->where('type', $type);
            $laptopQuery->where('type', $type);
            $compquery->where('type', $type);
        }

        // Filter by brand if brand is provided in the request
        if ($request->has('brand')) {
            $brand = $request->input('brand');
            $query->where('brand', $brand);
            $laptopQuery->where('brand', $brand);
            $compquery ->where('brand', $brand);
        }
        if ($request->has('type')) {
            $type = $request->input('type');
        
            $compquery ->where('type', $type);
        }
        $sort = $request->input('sort');
        if ($sort === 'asc') {
            $query->orderBy('price', 'asc');
            $laptopQuery->orderBy('price', 'asc');
            $compquery->orderBy('price', 'asc');
        } elseif ($sort === 'desc') {
            $query->orderBy('price', 'desc');
            $laptopQuery->orderBy('price', 'desc');
            $compquery->orderBy('price', 'desc');
        }

        $products = $query->paginate(15);
        $laptops = $laptopQuery->paginate(15);
        $comps=$compquery->paginate(9);

        return view('products.index', compact('products', 'laptops','comps','type'));
    }
    public function comdex(Request $request)
    {
        
        $compquery = components::query();

        
        
           
        

       
        $comps=$compquery->paginate(9);

        return view('products.oindex', compact('comps'));
    }
    public function bindex(Request $request)
    {
        $query = Product::query();
        $laptopQuery = Laptop::query();
        $compquery = components::query();

        // Filter by type if type is provided in the request
        if ($request->has('type')) {
            $type = $request->input('type');
            $query->where('type', $type);
            $laptopQuery->where('type', $type);
            $compquery->where('type', $type);
        }

        // Filter by brand if brand is provided in the request
        if ($request->has('brand')) {
            $brand = $request->input('brand');
            $query->where('brand', $brand);
            $laptopQuery->where('brand', $brand);
            $compquery ->where('brand', $brand);
        }
        if ($request->has('type')) {
            $type = $request->input('type');
        
            $compquery ->where('type', $type);
        }

        $products = $query->paginate(15);
        $laptops = $laptopQuery->paginate(15);
        $comps=$compquery->paginate(9);

        return view('products.bindex', compact('products', 'laptops','comps','type','brand'));
    }
    public function cindex(Request $request)
    {
        
        $compquery = components::query();

        // Filter by type if type is provided in the request
       

        if ($request->has('type')) {
            $type = $request->input('type');
            $compquery->where('type', $type);
        }

        // Filter by brand if brand is provided in the request
        if ($request->has('brand')) {
            $brand = $request->input('brand');
           
            $compquery ->where('brand', $brand);
        }
      

       
        $comps=$compquery->paginate(9);

        return view('products.cindex', compact('comps','type'));
    }
    public function sindex(Request $request)
    {
        $type = $request->input('type');
        $keyword = $request->input('keyword');
        $products = Product::where('name', 'like', '%' . $keyword . '%')->limit(15)->get();
        $laptops = Laptop::where('name', 'like', '%' . $keyword . '%')->limit(15)->get();
        $comps = components::where('name', 'like', '%' . $keyword . '%')->limit(15)->get();
        return view('products.sindex', compact('products', 'laptops','comps'));


        
    }
    public function show($id)
{
    $product = Product::find($id);

    if (!$product) {
        $product = Laptop::find($id);
    }

    if (!$product) {
        // Product not found in both tables
        abort(404);
    }
    return view('products.show', compact('product'));
}
public function showCart()
{
    $user = Auth::user();
    $cartItems = $user->carts()->with('product','laptop')->get();
    $totalPrice = 0;

    foreach ($cartItems as $cartItem) {
        if ($cartItem->product) {
            $totalPrice += $cartItem->product->price * $cartItem->quantity;
        } elseif ($cartItem->laptop) {
            $totalPrice += $cartItem->laptop->price * $cartItem->quantity;
        }
    }

    return view('cart', compact('cartItems','totalPrice'));
}

public function checkout(Request $request)
{
    // Handle the payment logic here

    // Clear the cart after successful payment
    $user = Auth::user();
    //$user->carts()->delete();

    // Redirect to the home page or a thank you page
    return redirect()->route('payment');
}
private function calculateTotalPrice()
{
    $user = auth()->user();
    $cartItems = $user->carts()->with('product', 'laptop')->get();
    $totalPrice = 0;

    foreach ($cartItems as $cartItem) {
        if ($cartItem->product) {
            $totalPrice += $cartItem->product->price * $cartItem->quantity;
        } elseif ($cartItem->laptop) {
            $totalPrice += $cartItem->laptop->price * $cartItem->quantity;
        }
    }

    return $totalPrice;
}
public function payment()
{
    $user = auth()->user();
    $totalPrice = $this->calculateTotalPrice()*100; // Replace with your logic to calculate the total payment
    

    //return $user->redirectToBillingPortal();
    return view('payment',compact('totalPrice'));
}


public function processPayment(Request $request)
{
     $totalPrice = $this->calculateTotalPrice(); // Replace with your logic to calculate the total payment

    Stripe::setApiKey('sk_test_51NPILjBMZgTuAxwT3qDP3kKoo9WhRiBDM9Zzn06OgQVqZHfk54dpcBelhqmUkJOpKtD72nfYKSxYqkUyrJHC6uCw00Q01Zx7pB');

    {
        // Create a charge using Stripe
        $charge = Charge::create([
            'amount' => $totalPrice * 100, // Stripe requires the amount in cents
            'currency' => 'usd',
            'source' => $request->input('stripeToken'), // Stripe token obtained from the client-side
            'description' => 'Payment for your order',
        ]);

        // Handle successful payment
        // Clear the cart after successful payment
        $user = Auth::user();
        $user->carts()->delete();

        // Redirect to the home page or a thank you page
        return view('index');
     } //catch (\Exception $e) {
    //     // Handle payment failure
    //     return redirect()->route('login')->with('error', $e->getMessage());
    // }
}




}
