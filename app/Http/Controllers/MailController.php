<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\MailTest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function index(Request $request)
    {
        $data = [
            "subject" => "Test gmaili",
            "body" => "Hörmətli namizəd,

            Şirkətimizə və vakansiyaya göstərdiyiniz marağa görə təşəkkür edirik.
                    
            CV-niz vakansiyanın tələblərinə uyğun dəyərləndiriləcək.             
            
            Uyğun olduğunuz təqdirdə, sizə geridönüş edəcəyik.             
            
            Uyğun olmadığınız təqdirdə isə, qətiyyən ruhdan düşməyin.
                        
            Sadəcə o gün bu gün deyil, bu qədər😊
            ",
        ];

        $user = User::where('email', $request->input('email'))->first();

        if ($user) {
            try {
                Mail::to($user)->send(new MailTest($data));
                return view('login')->with('success', 'Gmailinize link gönderildi');
            } catch (Exception $th) {
                return redirect()->route('login')->with('success', 'Gmailine bax ');
            }
        } else {
            return redirect()->route('forgot')->with('error', 'Gmailini yoxla birde yaz ');
        }
    }
}
