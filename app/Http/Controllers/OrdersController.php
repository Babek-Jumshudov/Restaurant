<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Basget;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(30);
        $sellers = Seller::orderBy("created_at", "desc")->paginate(30);
        $basgets = Basget::orderBy("created_at", "desc")->paginate(30);
        $orders = Orders::orderBy("created_at", "desc")->paginate(30);
        return view('orders.index', compact('products', 'sellers', 'basgets', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        dd($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orders $orders)
    {
        //
    }

   
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orders $orders)
    {
        //
    }
}
