<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function index()
    {
        $users = User::orderBy("created_at", "desc")->paginate(20);
        return view('AdminPanel.admin', compact('users'));
    }


    public function create()
    {
        return view("AdminPanel.rest");
    }

    /**
     * Store a newly created resource in storage.
     */
   

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

   
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user' , [$user->id])->with(['success' => 'Istifadeci silindi']);
    }
}
