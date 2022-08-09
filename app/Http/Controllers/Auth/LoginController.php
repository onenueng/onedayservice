<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\APIs\FakeAuthenticationAPI;
use App\Models\User;
use Illuminate\Validation\Rule;

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
            // 'username' => 'required',
            // 'password' => 'required',

            'username' => [
                'required',
                Rule::unique('users')->where(fn($query) => $query->where('username',$data['username']))
            ],
            'password' => 'required',
        ]);

        $request->username = $validated['username'];
        $request->password = $validated['password'];



        $api = new FakeAuthenticationAPI; //สร้าง API
        // $apiUser = $api->login($request->input('username'), $request->input('password'))->with('feedback', 'username & password เป็นค่าว่างไม่ได้ ');
        $apiUser = $api->login($request->input('username'), $request->input('password')); //รับ Input ที่ user ส่งมา

        // if ($apiUser > 0){
        //     return back()->with('feedback', 'username & password เป็นค่าว่างไม่ได้ ')->withInput();
        // }


        if (! $apiUser['found']) {
            // แจ้งให้ทราบว่าอะไรสักอย่างผิด
            // return 'user not found';
            // return back()->with('feedback', 'ไม่มีข้อมูล user นี้ ')->withInput();
            return back()->with('feedback', 'ไม่พบข้อมูล user นี้ ');
        }

        // check ตารางว่ามี user_name นี้หรือยัง ถ้ายังต้อง insert
        // SELECT * FROM users WHERE user_name = ?
        if ($user = User::where('username', $request->input('username'))->first()) {
            // return back()->with('feedback','พบข้อมุล '.$user['username'] .' ในตาราง');
            return back()->with('feedback',$user['username']);
            // return back()->with( $user);

        }

        // return $apiUser;
        return back()->with('feedback','ยังไม่พบข้อมุล '.$apiUser['username'] .' ในตาราง');
    }
}
