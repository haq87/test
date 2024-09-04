<?php

namespace App\Services;

use App\Models\User;

class LoginService
{
    public function login($email) {
        return User::where('email', $email)->orWhere('username', $username)
        ->first();
    }
}
