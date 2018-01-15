<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PainelAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->can('Painel Administrativo')) {
            return $next($request);
        }else if(Auth::guard($guard)->check()){
            return redirect('/principal');
        }else{
            return redirect('/admin');
        }
    }
}
