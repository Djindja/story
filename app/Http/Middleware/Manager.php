<?php

namespace App\Http\Middleware;

use Auth;
use Lang;
use Closure;

class Manager
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role_id == 2) {
            return $next($request);
        } else {
            return redirect("/home")->withErrors([Lang::get('errors.notPermitted')]);
        }
    }
}
