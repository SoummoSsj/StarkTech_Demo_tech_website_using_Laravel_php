<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminlaptopController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/payment', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment');


});
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/products', function () {
    return view('products.index');
});



Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();
Route::get('/products/index', [ProductsController::class, 'sondex'])->name('products.sondex');

Route::get('/products',[App\Http\Controllers\ProductsController::class,'index'])->name('products');
Route::get('/products/sindex', [ProductsController::class, 'sindex'])->name('products.sindex');
Route::get('/products/cindex', [ProductsController::class, 'cindex'])->name('products.cindex');
Route::get('/products/bindex', [ProductsController::class, 'bindex'])->name('products.bindex');
Route::get('/products/oindex', [ProductsController::class, 'comdex'])->name('products.oindex');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');
// ...

Route::middleware('auth')->group(function () {
    // ...
    Route::post('/add-to-cart/{productId}', [HomeController::class, 'addToCart'])->name('addToCart');
    Route::post('/checkout', [ProductsController::class, 'checkout'])->name('checkout');
    Route::get('/cart', [ProductsController::class, 'showCart'])->name('cart');
    Route::post('/checkout', [ProductsController::class, 'checkout'])->name('checkout');
    Route::get('/remove-from-cart/{cartItemId}', [HomeController::class, 'removeFromCart'])->name('removeFromCart');
});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/billing-portal', [ProductsController::class, 'redirectToBillingPortal'])
    ->name('cashier.billing_portal');

Route::get('/payment', [ProductsController::class, 'payment'])->name('payment')->middleware('auth');
Route::post('/process-payment', [ProductsController::class, 'processPayment'])->name('process.payment')->middleware('auth');
Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');
Route::prefix('admin')->middleware('auth')->group(function () {
    // Show the admin dashboard
    Route::get('/admin/choose', [AdminlaptopController::class, 'hme'])->name('admin.choose');

    Route::get('/admin/monitors', [AdminController::class, 'index'])->name('admin.dashboard');

    // Create a new product
    Route::get('/products/create', [AdminController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [AdminController::class, 'store'])->name('admin.products.store');

    // Edit an existing product
    Route::get('/products/{product}/edit', [AdminController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{product}', [AdminController::class, 'update'])->name('admin.products.update');

    // Delete a product
    Route::delete('/products/{product}', [AdminController::class, 'destroy'])->name('admin.products.destroy');
     // Show the admin dashboard
     Route::get('/admin/laptop', [AdminlaptopController::class, 'index'])->name('admin.cashboard');

     // Create a new product
     Route::get('/products/create', [AdminlaptopController::class, 'create'])->name('admin.products.create');
     Route::post('/products', [AdminlaptopController::class, 'store'])->name('admin.products.store');
 
     // Edit an existing product
     Route::get('/products/{product}/edit', [AdminlaptopController::class, 'edit'])->name('admin.products.edit');
     Route::put('/products/{product}', [AdminlaptopController::class, 'update'])->name('admin.products.update');
 
     // Delete a product
     Route::delete('/products/{product}', [AdminlaptopController::class, 'destroy'])->name('admin.products.destroy');
});



