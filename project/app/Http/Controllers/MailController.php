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
            "body" => "Burdan Nihada ve Mentor Emine ateshli salamlarr..",
        ];

        $user = User::where('email', $request->input('email'))->first();
        if ($user) {

            try {
                Mail::to('babekcumsudov593@gmail.com')->send(new MailTest($data));
                return view('login')->with('success', 'Gmailinize link gönderildi');

            } catch (Exception $th) {
                return redirect()->route('login')->with('success', 'Gmailine bax qaqa');
            }
        } else {
            return redirect()->route('forgot')->with('email', 'Gmailini yoxla birde yaz qaqa');
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
