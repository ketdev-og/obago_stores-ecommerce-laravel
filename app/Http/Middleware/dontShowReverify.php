<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dontShowReverify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('admin')->check()){
                    
            if(Auth::guard('admin')->user()->is_verified == 1){
                
                return back();
            }
            
        }

        if (Auth::check()){
                    
            if(Auth::user()->is_verified == 1){
                
                return back();
            }
            
        }



        return $next($request);
    }
}
