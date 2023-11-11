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
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (auth()->attempt($credentials)) {
            return redirect()->intended('home')->with('success', 'Welcome QAQA');
        } else {
            return back()->with(['email' => 'Melumatlari duzgun daxil edin']);
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

    public function resetPassword(Request $request)
    {
        
        $user = User::where('email', $request->input('email'))->first();

        $data = ['name' => $request->input('name'), 'email' => $request->input('email')];
    
        if ($user) {
            Mail::send('babekcumsudov593@gmail.com', $data, function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('Hello BAbek');
            });
    
            return redirect()->route('home')->with(['success' => 'Mail başarıyla gönderildi QAQA.']);
        } else {
            return back()->with(['email' => 'Kullanıcı e-posta adresine sahip değil.']);
        }
    }

    public function forgotEmail(Request $request)
    {
        $email = $request->email;

        $status = Password::sendResetLink(['email' => $email]);

        if ($status === Password::RESET_LINK_SENT) {
            return redirect('login')->with('success', 'Gmaile link gonderildi');
        } else {
            return back()->withErrors(['email' => 'Gmailini yoxla qaqa']);
        }
    }


    public function testEmailConnection()
    {
        $host = 'mailpit';
        $port = 1025;

        $socket = @stream_socket_client("tcp://$host:$port", $errno, $errstr, 30);

        if ($socket) {
            echo "E-posta sunucusuna bağlantı başarılı.\n";
            fclose($socket);
        } else {
            echo "Bağlantı hatası: $errstr ($errno)\n";
        }
    }


    public function update(Request $request, string $id)
    {
        //
    }

}
