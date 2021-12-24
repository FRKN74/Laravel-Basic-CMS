<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

//auth
use Illuminate\Support\Facades\Auth;

class isAdmin
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
        if(!Auth::check()) // giriş yok ise !
        {
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
