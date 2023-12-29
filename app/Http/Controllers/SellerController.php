<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;


class SellerController extends Controller
{

    public function index()
    {
        $products = Seller::orderBy("created_at", "desc")->paginate(10);
        return view('AdminPanel.rest', compact('products'));
    }

    public function create(Request $request)
    {

        if ($request->hasFile('image')) {
            $files = $request->file('image');

            if ($files->isValid()) {
                $fileName = time() . '_' . $files->getClientOriginalName();
                $files->move(public_path('uploads'), $fileName);
                $seller = new Seller();
                $seller->image = 'uploads/' . $fileName;
                $seller->name = $request->name;
                $seller->delivery = $request->delivery;
                $seller->category = $request->category;
                $seller->star = $request->star;
                $seller->distance = $request->distance;
                $seller->save();

                return redirect()->route('restaurant')->with('success', 'Məhsul əlavə olundu!!');
            } else {
                return redirect()->route('restaurant')->with('error', 'Məhsul əlavə edilə bilmədi. Dosya geçersiz.');
            }
        } else {
            return redirect()->route('restaurant')->with('error', 'Məhsul əlavə edilə bilmədi. Dosya yüklenmedi00.');
        }
    }

    public function destroy(Seller $seller)
    {
        try {
            $seller->delete();
            return redirect()->route('restaurant')->with('success', 'Şirkət silindi');
        } catch (\Throwable $th) {
            return redirect()->route('restarant')->with('error', 'Şirkət silinə bilmədi.' . $th->getMessage());
        }
    }

}
