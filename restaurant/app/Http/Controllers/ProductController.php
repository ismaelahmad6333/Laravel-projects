<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //
        // $products = Product::all();
        return view('products.index', [
            'products' => Product::orderBy('updated_at', 'desc')->get()
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', [
            'product' => $product
        ]);
    }
}
