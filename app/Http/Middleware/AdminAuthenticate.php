<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin') {
        dd(Auth::guard($guard)->guest());
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('webpanel/login');
            }
        }

        return $next($request);
    }

    public function getAuthIdentifierName() {
        return $this->getKeyName();
    }

    public function getAuthIdentifier() {
        return $this->getKey();
    }

}
