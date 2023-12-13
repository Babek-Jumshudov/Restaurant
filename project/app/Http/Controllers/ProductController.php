<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('home.welcome', compact('products'));
    }
    public function view()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('AdminPanel.menu', compact('products'));
    }
    public function explore()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('explore.index', compact('products'));
    }
    public function favorites()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('favorites.index', compact('products'));
    }
    public function orders()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('orders.index', compact('products'));
    }
    public function setting()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('settings.index', compact('products'));
    }

    public function create(Request $request)
    {
        $file = $request->file('image');
        if ($file && $file->isValid()) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);

            $product = new Product();
            $product->delivery = $request->delivery;
            $product->name = $request->name;
            $product->star = $request->star;
            $product->category = $request->category;
            $product->distance = $request->distance;
            $product->image = 'uploads/' . $fileName;
            $product->save();

            return redirect()->back()->with("success", "Məhsul əlavə olundu!!");
        } else {
            return redirect()->back()->with("error", "Məhsul əlavə olunmadi");

        }

    }

 
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('menu' , [$product->id])->with(['success' => 'Menyu silindi']);
    }
}
