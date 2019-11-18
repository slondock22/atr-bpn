<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $roleIds = ['admin_pusat' => 1, 'admin_kanwil' => 2, 'admin_kantah' => 3, 'op_kanwil' => 4, 'op_kantah' => 5, 'op_pusat' => 6];
        $allowedRoleIds = [];
        foreach ($roles as $role)
        {
           if(isset($roleIds[$role]))
           {
               $allowedRoleIds[] = $roleIds[$role];
           }
        }
        $allowedRoleIds = array_unique($allowedRoleIds); 

         if(in_array(Cookie::get('USER_ROLE'), $allowedRoleIds)) {
            return $next($request);
          }

          return redirect('/home');
    }
}
