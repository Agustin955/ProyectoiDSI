<?php

namespace App\Http\Middleware;

use Closure;

class EspeciesMiddleware
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
        $especies=func_get_args();
        
        return $next($request);
    }
}
