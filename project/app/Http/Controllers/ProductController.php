<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(10);
        return view('home.welcome', compact('products'));
    }

    public function view()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(10);
        return view('AdminPanel.menu', compact('products'));
    }

    public function create(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'name' => 'required|string',
        //     'delivery' => 'required|numeric',
        //     'star' => 'required|numeric',
        //     'category' => 'required|string',
        //     'distance' => 'required|numeric',
        // ]);
        $product = new Product();
        $product->image = $request->file('image');
        $product->name = request()->name;
        $product->delivery = request()->delivery;
        $product->star = request()->star;
        $product->category = request()->category;
        $product->distance = request()->distance;
        $product->save();
        $products = Product::all();
        return redirect()->route('menu')->with(compact('products'));
    }


    public function store(Request $request)
    {
        //
    }

    public function edit(Product $product)
    {
        //
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
