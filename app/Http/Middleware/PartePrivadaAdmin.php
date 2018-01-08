<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PartePrivadaAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $email = Auth::user()->email;
            if($email == 'Admin@admin.com') {
                //return redirect('/error404');
            }
            else {
                return redirect('/noadmin');
            }
            
        }
        else {
            return redirect('/noadmin');
        }
        return $next($request);
    }
}
