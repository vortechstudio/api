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
            try {
                $user = User::where('email', request('email'))->first();

                if (request()->has('remember')){
                    $token = $user->createToken('auth_token');
                } else {
                    $token = $user->createToken('auth_token', ['*'], now()->addHour());
                }

                $user->updated_at = now();
                $user->save();

                return $this->success([
                    "access_token" => $token->plainTextToken,
                    "provider" => request()->has('provider') ? request('provider') : null,
                ]);
            }catch (\Exception $exception) {
                return $this->error($exception, 'Erreur durant la connexion !');
            }
        } else {
            return $this->error(null, 'Identifiant invalide');
        }
    }
}
