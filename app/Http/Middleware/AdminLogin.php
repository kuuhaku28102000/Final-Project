<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class AdminLogin
{
    use AuthenticatesUsers;
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
        if(Auth::guard('student')->check()){
          
            return $next($request);
        }
        else{
            return redirect('/login/student');
        }
        
    }
    
    
}
