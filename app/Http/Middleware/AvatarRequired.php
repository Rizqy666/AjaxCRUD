<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AvatarRequired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() && !auth()->user()->avatar) {
            return redirect()->route('profile.avatar')->with('error', 'Silakan lengkapi avatar Anda terlebih dahulu.');
        }

        return $next($request);
    }
}
