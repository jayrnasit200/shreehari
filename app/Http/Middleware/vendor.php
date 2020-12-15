<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class vendor
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
        if(auth()->user()){
            if(auth()->user()->role == 2){
                return $next($request);
            }
            return redirect('home')->with('error',"You don't have vendor access.");
        }
       return redirect('/login');

    }
}
