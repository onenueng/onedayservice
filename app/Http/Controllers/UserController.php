<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('user.index')->with(['users' => $users]);

    }

    public function show(User $user)
    {
        return view('user.show')->with(['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('user.edit')->with(['user'=> $user]);
    }

    public function update(User $user)
    {
        $validated = request()->validate([
            'sap_id' => 'required|max:8',
            'username' => 'required|unique:users|max:255',
            'full_name' => 'required|max:255',
            // 'full_name' => 'required|unique:users|max:255',
        ]);


        // $user = new User();
        // $user->sap_id = $validated['sap_id'];
        // $user->username = $validated['username'];
        // $user->full_name = $validated['full_name'];
        // $user->save();
        
        $user->update($validated);
        return redirect()->route('user')->with('feedback', 'update Userสำเร็จแล้ว ');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('feedback', ' ลบห้อง '.$user->id. ' สำเร็จแล้ว');

    }




    // public function login(User $user)
    // {
    //     $users = User::all();
    //     return view('auth.login')->with(['user'=>$user]);
    // }

}
