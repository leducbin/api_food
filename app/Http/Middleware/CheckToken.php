<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = User::all();
        foreach ($user as $api_token) {
            if($request->header("Api-Token") == $api_token->api_token)
            {
                return $next($request);
            }
            else
            {
                return response()->json(['error' => 'Unauthenticated.'], 401);
            }
        }

        
    }
}
