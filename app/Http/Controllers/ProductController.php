<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();
      //  dd($products);

        return view('layouts.products', compact('products'));
    }
}
