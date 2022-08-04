<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\APIs\FakeAuthenticationAPI;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $data = request()->all();

        $validated = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $request->username = $validated['username'];
        $request->password = $validated['password'];


        $api = new FakeAuthenticationAPI;
        $apiUser = $api->login($request->input('username'), $request->input('password'))->with('feedback', 'username & password เป็นค่าว่างไม่ได้ ');

        if (! $apiUser['found']) {
            // แจ้งให้ทราบว่าอะไรสักอย่างผิด
            return 'user not found';
        }

        // check ตารางว่ามี user_name นี้หรือยัง ถ้ายังต้อง insert
        // SELECT * FROM users WHERE user_name = ?
        if ($user = User::where('username', $request->input('username'))->first()) {
            return $user;
        }

        return $apiUser;
    }
}
