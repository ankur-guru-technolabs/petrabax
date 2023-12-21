<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Session;

class CheckUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if ($this->hasValidSession()) {
                return $next($request);
            }
            Auth::logout();
        }

        return redirect('/login');
    }

    protected function hasValidSession()
    {
        $rememberMeExpiresAt = session('login_expires_at');
        if (!session('is_remembered') && $rememberMeExpiresAt && now()->lt($rememberMeExpiresAt)) {
            $rememberMeLifetime = config('auth.without_remember_me_lifetime', 60);
            Session::put('login_expires_at', now()->addMinutes($rememberMeLifetime));
        }
        return $rememberMeExpiresAt && now()->lt($rememberMeExpiresAt);
    }
}
