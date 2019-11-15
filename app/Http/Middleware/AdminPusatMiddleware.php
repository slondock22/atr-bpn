<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;


class AdminPusatMiddleware
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
        $role = Cookie::get('USER_ROLE');

        if ($role == '1') {
            return $next($request);
        } else {
            return redirect('/home');
        }
    }
}
