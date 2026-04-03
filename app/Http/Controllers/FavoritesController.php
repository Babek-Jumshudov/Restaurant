<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use App\Models\Seller;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    public function create(Seller $seller)
    {
        try {
            $favorite = Favorites::where('seller_id', $seller->id)->first(); // Mevcut favoriyi kontrol et
    
            if (!$favorite) {
                $newFavorite = new Favorites;
                $newFavorite->seller_id = $seller->id;
                $newFavorite->save();
                return redirect()->back()->with("success", "Favoritə əlavə olundu!!");
            } else {
                return redirect()->back()->with("info", "Bu restoran artıq favorilərdə var.");
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Favoritə əlavə edilmədi! " );
        }
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
    public function show(Favorites $favorites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorites $favorites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorites $favorites)
    {
        //
    }


    public function destroy(Favorites $favorite)
    {
        try {
            $favorite->delete();
            return redirect()->back()->with("success", 'Restoran favoritlərdən silindi');
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Favori Restoran silinmədi! " ,$th);
        }
    }
}
