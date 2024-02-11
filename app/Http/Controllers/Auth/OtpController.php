<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ResponseApiController;
use App\Models\User\User;
use App\Notifications\Users\ActivateOtpNotification;
use App\Notifications\Users\SendingTokenOtpNotification;

class OtpController extends ResponseApiController
{
    public function activate()
    {
        if (request()->user()->otp) {
            return $this->error(null, 'OTP Déjà activé');
        } else {
            try {
                $user = User::find(request()->user()->id);

                $user->update([
                    'otp' => true,
                ]);

                $user->notify(new ActivateOtpNotification($user));
            } catch (\Exception $exception) {
                return $this->error($exception, "Erreur lors de l'activation de l'OTP");
            }

            return $this->success();
        }
    }

    public function sending()
    {
        if (request()->user()->otp) {
            try {
                $user = User::find(request()->user()->id);

                $generateToken = random_numeric(6);

                $user->otp_token = $generateToken;
                $user->otp_expires_at = now()->addMinutes(10);
                $user->save();

                $user->notify(new SendingTokenOtpNotification($user, $generateToken));

                return $this->success();

            } catch (\Exception $exception) {
                return $this->error($exception, 'Erreur lors de la génération OTP Token !');
            }
        } else {
            return $this->error(null, "Vous n'avez pas activé l'OTP");
        }
    }

    public function checkout()
    {
        if (request()->user()->otp && request()->user()->otp_token == request('token')) {
            if (request()->user()->otp_expires_at >= now()) {
                request()->user()->otp_token = null;
                request()->user()->otp_expires_at = null;
                request()->user()->save();

                return $this->success();
            } else {
                return $this->error(null, 'Token OTP expiré !');
            }
        } else {
            return $this->error(null, "Soit vous n'avez pas activé OTP, soit le token ne correspond pas !");
        }
    }
}
