<?php

use Illuminate\Http\Request;  // ← correct
use App\Models\Product;


Route::get('/', function () {
    return view('welcome');
});




Route::get('/show-products', function () {

    $products = Product::all();

    return view('products', compact('products'));

});

// Edit product form
Route::get('/edit-product/{id}', function ($id) {
    $product = Product::find($id);
    return view('edit-product', compact('product'));
});

// Update product
Route::post('/update-product/{id}', function (Request $request, $id) {
    $product = Product::find($id);
    $product->update([
        'name' => $request->name,
        'price' => $request->price,
        'category' => $request->category,
    ]);
    return redirect('/show-products');
});

// Delete product
Route::get('/delete-product/{id}', function ($id) {
    $product = Product::find($id);
    if($product){
        $product->delete();
    }
    return redirect('/show-products');
});


// Show Add Product Form
Route::get('/add-product-form', function () {
    return view('add-product');
});

// Save product from form
Route::post('/save-product', function (Request $request) {
    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'category' => $request->category,
    ]);

    return redirect('/show-products');
});