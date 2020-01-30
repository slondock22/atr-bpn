<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;
use Session;

class LoginMiddleware
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
       
        if ($this->hasSession('TOKEN_AUTH_APP')) {
            return $next($request);
        }
        else {
            return redirect('/login');
        }
            
    }

    protected function hasSession($cookie_name)
    {
         $cookie_exist = Session::get($cookie_name);
         return ($cookie_exist) ? true : false;
    }
}
