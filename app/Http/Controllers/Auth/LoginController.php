<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\APIs\FakeAuthenticationAPI;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $api = new FakeAuthenticationAPI; //สร้าง API
        $apiUser = $api->login($validated['username'], $validated['password']);


        if (! $apiUser['found']) { // AD บอกว่าไม่ผ่าน
            return back()->with('feedback', 'ไม่พบข้อมูล user นี้ กรุณาลองใหม่');
        }

        // AD ตอบว่าผ่านแล้ว
        // หาว่ามี user ที่ใช้ username AD นี้ในตาราง users ของเราแล้วหรือยัง
        // SELECT * FROM users WHERE username = ? LIMIT(1)
        $user = User::where('username', $validated['username'])->first();

        if ($user === null ) { // ยังไม่มี username นี้ในตาราง users ของเรา
            // insert user ในตาราง users ของเรา
            $user = new User;
            $user->sap_id = $apiUser['sap_id'];
            $user->username = $apiUser['username'];
            $user->full_name = $apiUser['full_name'];
            $user->password = \Hash::make(\Str::random(12));
            $user->save();


            // $user = User::create([
            //     'sap_id' => $apiUser['sap_id'],
            //     'username' => $apiUser['username'],
            //     'full_name' => $apiUser['full_name'],
            // ]);

            // INSERT INTO users(...) VALUES(...)
        }

        Auth::login($user); // laravel จะสร้าง session ให้

        return redirect()->route('home');
    }
}
