<?php

namespace App\Http\Middleware;

use Closure;
use Request;

class AfterMiddle {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->header('your-ip', Request::ip());
        return $response;
    }
}
