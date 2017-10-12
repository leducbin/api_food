<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Http\Request;

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
        if(($request->header("Api-Token")) != null)
        {
            foreach ($user as $api_token) 
            {
                if($request->header("Api-Token") == $api_token->api_token)
                {
                    return $next($request);
                }
            }
            return response()->json(null, 204);
        }
        else
        {
            return response()->json(null, 204);
        }
    }
}
