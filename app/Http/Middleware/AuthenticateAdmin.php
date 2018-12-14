<?php

namespace App\Http\Middleware;

use Closure;
// Auth Facade
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
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
        if (!Auth::guard('pengguna')->check()) {
          return redirect('/login');
        }

        return $next($request);
    }
}
