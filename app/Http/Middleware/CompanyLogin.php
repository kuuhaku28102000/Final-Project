<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CompanyLogin
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
        if(Auth::check()){
            Auth::logout();
        }
        if(Auth::guard('company')->check()){
          
            return $next($request);
        }
        else{
            return redirect('/login/company');
        }
    }
}
