<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class customer
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
         if(auth()->user()->role == 3){
            return $next($request);
        }elseif(auth()->user()->role == 1){
            return $next($request);
        }
   
        return redirect('/')->with('error',"You don't have customer access.");
    }
}
