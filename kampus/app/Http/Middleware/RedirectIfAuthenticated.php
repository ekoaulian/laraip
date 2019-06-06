<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        if (Auth::guard($guard)->check()) {
            $route = null;

            switch ($guard) {
                case 'dosen':
                    $route = 'dosen.user';
                    break;

                // case 'user':
                //     $route = 'pegawai.user';
                //     break;
               
                default:
                    $route = 'welcome';
                    break;
            }

            return redirect()->route($route);
        }

        return $next($request);
    }
}
