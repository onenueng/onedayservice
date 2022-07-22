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



    // public function login(User $user)
    // {
    //     $users = User::all();
    //     return view('auth.login')->with(['user'=>$user]);
    // }

}

