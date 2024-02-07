<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseApiController;

class LogoutController extends ResponseApiController
{
    public function __invoke()
    {
        try {
            request()->user()->tokens()->delete();
            return $this->success();
        }catch (\Exception $exception) {
            return $this->error($exception, "Oh Oh !");
        }
    }
}
