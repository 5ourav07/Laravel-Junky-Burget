<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;

Route::get('/',[ProjectController::class,'index'])->name('home');

Route::get('/products',[ProjectController::class,'products'])->name('products');
Route::get('/products/single_page/{id?}',[ProjectController::class,'single_page'])->name('single_page');
Route::get('/products/single_page', function(){return redirect('/');});

Route::get('/products/{category}',[ProjectController::class,'category'])->name('category');

Route::get('/cart',[CartController::class,'cart'])->name('cart');
Route::post('/cart/add_to_cart',[CartController::class,'add_to_cart'])->name('add_to_cart');
Route::get('/cart/add_to_cart', function(){return redirect('/');});

Route::post('/cart/remove_from_cart',[CartController::class,'remove_from_cart'])->name('remove_from_cart');
Route::get('/cart/remove_from_cart', function(){return redirect('/');});

Route::post('/cart/edit_product_quantity',[CartController::class,'edit_product_quantity'])->name('edit_product_quantity');
Route::get('/cart/edit_product_quantity', function(){return redirect('/');});

Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');
Route::post('/place_order',[CartController::class,'place_order'])->name('place_order');

Route::get('/payment',[PaymentController::class,'payment'])->name('payment');

Route::get('/thankyou',[PaymentController::class,'thankyou'])->name('thankyou');

Route::get('/user_orders',[ProjectController::class,'user_orders'])->name('user_orders');
Route::get('/user_order_details/{id?}',[ProjectController::class,'user_order_details'])->name('user_order_details');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
