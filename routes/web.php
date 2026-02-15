<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/add-product', function () {

    Product::create([
        'name' => 'Laptop',
        'price' => 50000,
        'category' => 'Electronics'
    ]);

    Product::create([
        'name' => 'Mobile',
        'price' => 20000,
        'category' => 'Electronics'
    ]);

    Product::create([
        'name' => 'Shoes',
        'price' => 3000,
        'category' => 'Fashion'
    ]);

    return "Data Inserted";

});

Route::get('/show-products', function () {

    $products = Product::all();

    return view('products', compact('products'));

});
