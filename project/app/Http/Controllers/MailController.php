<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\MailTest;
use App\Models\User;
use Exception;
use Mail;

class MailController extends Controller
{

    public function index(Request $request)
    {
        $data = [
            "subject" => "Mesaj Var Qaqa",
            "body" => "Burdan Nemo'ya ateshli salamlarr..",
        ];

        $user = User::where('email', $request->input('email'))->first();
        if ($user) {

            try {
                Mail::to($request->email)->send(new MailTest($data));
                return view('login')->with('success', 'Gmailinize link gönderildi');

            } catch (Exception $th) {
                return redirect()->route('login')->with('success', 'Gmailine bax ');
            }
        } else {
            return redirect()->route('forgot')->with('email', 'Gmailini yoxla birde yaz ');
        }
    }   
}
   