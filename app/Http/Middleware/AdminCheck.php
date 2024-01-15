<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Session;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->type == 'admin') {
            if($this->hasValidSession()){
                if (\Route::has($request->route()->getName())) {
                    return $next($request);
                } else {
                    return redirect()->route('dashboard');
                }
            }
            Auth::logout();
        }
        return redirect()->route('signin')->with('error', 'You do not have permission to access this page.');
    }

    protected function hasValidSession()
    {
        $rememberMeExpiresAt = session('login_expires_at');
        // if (!session('is_remembered') && $rememberMeExpiresAt && now()->lt($rememberMeExpiresAt)) {
            // $rememberMeLifetime = config('auth.without_remember_me_lifetime', 60);
            // Session::put('login_expires_at', now()->addMinutes($rememberMeLifetime));
        // }
        return $rememberMeExpiresAt && now()->lt($rememberMeExpiresAt);
    }
}
