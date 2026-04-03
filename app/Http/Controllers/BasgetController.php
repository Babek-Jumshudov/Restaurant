<?php

namespace App\Http\Controllers;

use App\Models\Basget;
use App\Models\Orders;
use App\Models\Product;
use App\Models\Seller;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class BasgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $basgets = Basget::orderBy("created_at", "desc")->paginate(30);
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('home.basget', compact('products', 'basgets'));
    }



    public function basget(Request $request)
    {
        try {
            $basget = new Basget();

            $basget->id = $request->id;

            if ($basget->save()) {
                return redirect()->back()->with('success', 'Məhsul əlavə edildi');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Bu məhsul artıq səbətdə var');
        }
    }

    public function update(Basget $basget)
    {
        try {
            // return redirect()->back()->with('error', 'Artıq əlavə edilib..');
            
            $order = new Orders;
            $order->product_id = $basget->id;
            $order->save();
            $basget->delete();
            return redirect()->back()->with('success', 'Sifaris gonderildi!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Sifaris gonderilmedi!');
        }
    }


    public function show(Basget $basget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Basget $basget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Basget $basget)
    {
        try {
            $basget->delete();
            return redirect()->route('basget.index')->with('success', 'Məhsul silindi');
        } catch (\Exception $e) {
            return redirect()->route('basget.index')->with('error', 'Məhsul silinərkən bir xəta yarandı: ' . $e->getMessage());
        }
    }
}
