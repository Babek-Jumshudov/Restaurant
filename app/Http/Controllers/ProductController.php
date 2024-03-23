<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seller;
use App\Models\Basget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        $sellers = Seller::orderBy("created_at", "desc")->paginate(20);
        $basgets = Basget::orderBy("created_at", "desc")->paginate(30);
        return view('home.welcome', compact('products', 'sellers', 'basgets'));
    }

    public function view()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('AdminPanel.menu', compact('products'));
    }
    public function explore()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        $sellers = Seller::orderBy("created_at", "desc")->paginate(20);
        $basgets = Basget::orderBy("created_at", "desc")->paginate(30);
        return view('explore.index', compact('products', 'sellers', 'basgets'));
    }
    public function favorites()
    {
        $basgets = Basget::orderBy("created_at", "desc")->paginate(30);
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        $sellers = Seller::orderBy("created_at", "desc")->paginate(20);
        return view('favorites.index',  compact('products', 'sellers', 'basgets'));
    }

    public function order()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        $sellers = Seller::orderBy("created_at", "desc")->paginate(20);
        $basgets = Basget::orderBy("created_at", "desc")->paginate(30);
        return view('home.order', compact('products', 'sellers', 'basgets'));
    }
    public function products()
    {
        $basgets = Basget::orderBy("created_at", "desc")->paginate(30);
        $products = Product::orderBy("created_at", "desc")->paginate(50);
        return view('home.products', compact('products', 'basgets'));
    }

    public function setting()
    {
        $basgets = Basget::orderBy("created_at", "desc")->paginate(30);
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('settings.index', compact('products', 'basgets'));
    }
    public function detals(Seller $seller)
    {
        $basgets = Basget::orderBy("created_at", "desc")->paginate(30);
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('home.detals', ['seller' => $seller] , compact('products' , 'basgets'));
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
        return redirect()->route('menu', [$product->id])->with(['success' => 'Menyu silindi']);
    }
}
