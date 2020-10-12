<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
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
        // $name =  auth()->user()->name; 

        if (Auth::user()->id == 1) {
           return $next($request);
        }
        else{
           return $next($request);
        //    abort(401); // retrun Unautoorized when the user_id != 1.
        }

        
    }
}
