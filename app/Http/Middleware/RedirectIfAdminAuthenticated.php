<?php

namespace App\Http\Middleware;

use Closure;
// Facade auth
use Illuminate\Support\Facades\Auth;

class RedirectIfAdminAuthenticated
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
    //If request comes from logged in pengguna, he will
    //be redirected to pengguna's home page.
    if (Auth::guard('pengguna')->check()) {
      return redirect('/beranda');
    }

    return $next($request);
  }
}
