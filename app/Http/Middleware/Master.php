<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Master
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

        if (Auth::guest())
        {
            return redirect()->route('kick', "You must login befor access this page. Login, please...");
        } 
        else if(Auth::user()->level < 99)
        {
            return redirect()->route('kick', "Only my master can access here. Get out, please...");
        }
        
        return $next($request);
    }
}
