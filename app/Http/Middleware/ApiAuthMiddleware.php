<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        //dd($request->header("Authorization"), "Bearer ".env('API_AUTH_TOKEN'));
        if ($request->header('Authorization') !== 'Bearer '.config('api.auth_token')) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }

        return $next($request);
    }
}
