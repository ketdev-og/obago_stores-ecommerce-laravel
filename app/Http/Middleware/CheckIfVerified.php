<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIfVerified
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
                    
                    if(Auth::guard('admin')->user()->is_verified == 0){
                        
                        return redirect()->route('admin.reVerify');
                    }
                    
                }
           
        return $next($request);
    }
}
