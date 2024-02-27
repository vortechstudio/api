<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ResponseApiController;
use App\Models\User\User;

class RegisterController extends ResponseApiController
{
    public function __invoke()
    {
        request()->validate([
            'name' => 'required|string|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => \Hash::make(request('password')),
            'email_verified_at' => now(),
        ]);

        return $this->success($user);
    }
}
