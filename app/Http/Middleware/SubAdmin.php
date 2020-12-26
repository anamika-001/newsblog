<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class SubAdmin
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
        if (!Auth::check()) {
            return redirect('/SubAdmin/viewlogin');
        }
        // return $next($request);
    }
}
