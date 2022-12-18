<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next , $rolename)
    {
        if(Auth::check()){
            if (Auth::user()->role->name == $rolename)
                return $next($request);

        }
        else{
            return redirect()->route('login.form');
        }

        return redirect()->route('main')->withErrors('YOU HAVE NOT PERMISSION');
    }
}
