<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
class banned
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
        if(Auth::check()){
            if(Auth::user()->active != 1){
                abort(403);
            }
        }
        return $next($request);
    }
}
