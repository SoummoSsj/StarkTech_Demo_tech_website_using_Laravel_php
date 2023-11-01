<?php

namespace App\Http\Controllers;

use App\Models\laptop;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }--for autheticated entry I marked it it was unmarked

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function addToCart($productId)
    {
        $user = Auth::user();

        $product = Product::find($productId);
        $laptop = laptop::find($productId);
    
        if ($product || $laptop) {
            if ($product) {
        $productId = $product->id;
     $cartItem = Cart::where('user_id', $user->id)->where('product_id', $productId)->first();
    
            if ($cartItem) {
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'product_id' => $productId,
                    'quantity' => 1,
                ]);
            }
     Session::flash('success', 'Item added to cart.');
    
            return back();
    
    } else {
        $productId = $laptop->id;
         $cartItem = Cart::where('user_id', $user->id)->where('laptop_id', $productId)->first();
    
            if ($cartItem) {
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'laptop_id' => $productId,
                    'quantity' => 1,
                ]);
            }
     Session::flash('success', 'Item added to cart.');
    
            return back();
    
    }
    
            // Redirect to the products page or the cart page
           
        } else {
            // Product or laptop not found
            return back()->withErrors('Invalid product ID.');
        }
    }

    public function removeFromCart($cartItemId)
    {
        $cartItem = Cart::findOrFail($cartItemId);
        $cartItem->delete();

        // Redirect to the cart page
        return redirect()->route('cart');
    }
    

   
}
