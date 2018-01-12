<?php

namespace SICOVIMA\Http\Middleware;

use Closure;

class comun
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
            return $next($request);
        } else {
            return redirect('/login');
        }
    }
}
