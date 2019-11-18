<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class AdminKanwilMiddleware
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

        if ($role == '2') {
            return $next($request);
        } else {
            return redirect('/home');
        }
    }
}