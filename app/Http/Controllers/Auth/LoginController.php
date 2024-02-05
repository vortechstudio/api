<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseApiController;
use App\Models\User\User;

class LoginController extends ResponseApiController
{
    public function __invoke()
    {
        if (\Auth::attempt(request()->only('email', 'password'))) {
            $user = User::where('email', request('email'))->first();
            $token = $user->createToken('auth_token')->plainTextToken;

            $this->success([
                "access_token" => $token,
                "provider" => request()->has('provider') ? request('provider') : null
            ]);
        } else {
            $this->error(null, 'Invalid credentials');
        }
    }
}
