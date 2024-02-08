<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseApiController;
use App\Notifications\Users\UpdateMailNotification;

class UpdateController extends ResponseApiController
{
    public function __invoke()
    {
        //dd(request()->all());
        request()->validate([
            "action" => "required"
        ]);

        return match (request('action')) {
            "password" => $this->reinitPassword(),
            "email" => $this->updateMail(),
        };
    }

    private function reinitPassword()
    {
        request()->validate([
            "current_password" => "required|min:8",
            "password" => "required|min:8|confirmed",
            "password_confirmation" => "required",
        ]);

        try {
            request()->user()->update([
                "password" => \Hash::make(request("password"))
            ]);

            return $this->success();
        }catch (\Exception $exception) {
            return $this->error($exception, "Erreur lors de la reinitialisation du mot de passe");
        }
    }

    private function updateMail()
    {
        request()->validate([
            "email" => "required|email"
        ]);

        try {
            request()->user()->update([
                "email" => request('email')
            ]);

            request()->user()->notify(new UpdateMailNotification(request()->user()));

            return $this->success();
        }catch (\Exception $exception) {
            return $this->error($exception, "Erreur lors du changement d'adresse Mail");
        }
    }


}
