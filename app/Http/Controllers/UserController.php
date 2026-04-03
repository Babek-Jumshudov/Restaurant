<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Password;
use Mail;


class UserController extends Controller
{


    public function index()
    {
        return view('login-register.login');
    }


    public function store(Request $request)
    {
        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];
    
            if (auth()->attempt($credentials)) {
                return redirect()->intended('home')->with('success', 'WELCOME ' . ' ' . $request->email);
            } else {
                return back()->with(['error' => 'Melumatlari duzgun daxil edin']);
            }
        } catch (\Throwable $th) {
          
            return back()->with(['error' => 'Bir hata oluştu. Lütfen tekrar deneyin.']);
        }
    }
    

    public function register(Request $request)
    {
        $request->validate([
            "name" => "required|min:3|max:20",
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:24',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('login')->with('success', 'Qeydiyyat tamamlandi!');
    }
}
