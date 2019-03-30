<?php

namespace App\Http\Controllers;

use App\Product;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop')->withProducts(
            Product::orderBy('created_at', 'desc')->get()
        );
    }

    public function showProduct(Product $product)
    {
        return view('products.show')->withProduct($product);
    }
}
