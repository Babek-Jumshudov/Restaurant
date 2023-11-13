<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(10);
        return view('home.welcome' , compact('products'));
    }

//     public function xxz()
//     {
//         $access = false;
//         $about_us = AboutUs::with('thumb')->first();
//         $guide = BeGuideRequest::where('user_id', auth()->id())->first();
//         if(auth()->check()){
//             if ($guide?->status == "3" || auth()->user()->role_id == "4") {
//                 $access = true;
//             }
//         }
//         $access = true;
//         return view('client.pages.about_us', compact('about_us','access'));
//     }







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
