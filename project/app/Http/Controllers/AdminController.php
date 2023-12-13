<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;



class AdminController extends Controller
{

    public function index()
    {
        $users = User::orderBy("created_at", "desc")->paginate(20);
        return view('AdminPanel.admin', compact('users'));
    }

    public function show()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view('home.welcome', compact('products'));
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user', [$user->id])->with(['success' => 'Istifadeci silindi']);
    }
}
