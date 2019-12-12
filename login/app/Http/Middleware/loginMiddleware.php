<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;

class loginMiddleware
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
        $jwt = $request->getContent();
        $key = env('JWT_KEY');
        $decoded = JWT::decode($jwt, $key, array('HS256'));
        $request->attributes->add(['decoded' => json_encode($decoded)]);
        // print($decoded);
        // return json_encode($decoded);
        return $next($request);
    }
}
