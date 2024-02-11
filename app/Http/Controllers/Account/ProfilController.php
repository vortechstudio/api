<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\ResponseApiController;
use App\Models\User\User;

class ProfilController extends ResponseApiController
{
    public function __invoke()
    {
        $user = User::with('profil', 'services.service', 'tickets', 'events')
            ->find(request()->user()->id);

        return $this->success([
            'user' => $user,
        ]);
    }
}
