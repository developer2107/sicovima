<?php

namespace SICOVIMA\Http\Middleware;

use Closure;

class admin
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
        if (auth()->check()) {
            if (Auth()->user()->tipo != 1) {
              return redirect('/');  
            }
            return $next($request);
        } else {
            return redirect('/login');
        }
    
    }
}
