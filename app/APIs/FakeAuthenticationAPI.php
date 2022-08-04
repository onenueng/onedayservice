<?php

namespace App\APIs;

use App\Models\User;

class FakeAuthenticationAPI
{
    public function login($username, $password)
    {

        
        if ($username == $password) { // login ไม่สำเร็จ
            return [
                'found' => false
            ];
        }

        // login สำเร็จ
        $fakeUser = User::factory()->definition();
        return [
            'found' => true,
            'sap_id' => $fakeUser['sap_id'],
            'username' => $username,
            'full_name' => $fakeUser['full_name'],
        ];
    }
}