<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class ResetSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
      if (Session::get('visitas', 0) >= 20) {
        Session::flush();
      }
      return $next($request);
    }
}
