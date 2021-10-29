<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('index');
});


Route::post('/display-discount', function (\Illuminate\Http\Request $request) {
    $product = $request->product;
    $price = $request->price;
    $discount = $request->discount;
    $amount = $price * $discount * 0.01;
    $discount_price = $price - $amount;
    return view('show_discount_amount', compact(['product', 'price', 'discount', 'amount', 'discount_price']));
});

