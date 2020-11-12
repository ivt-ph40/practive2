<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if(\Auth::check() && \Auth::user()->role_id ==1){
            return $next($request);

        }
        return redirect()->back()->with('permission', 'You\'re not allowed to access this page');
        // abort(403);
    }
}
