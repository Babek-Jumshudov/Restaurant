<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(10);
        return view('welcome', compact('products'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function show($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            abort(404);
        }

        return view('products.show', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
