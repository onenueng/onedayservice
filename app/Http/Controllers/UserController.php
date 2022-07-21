<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('user.index')->with(['users' => $users]);

    }

    public function show(User $user)
    {
        return view('user.show')->with(['user' => $user]);
    }


}

