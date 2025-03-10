<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        dd(Auth::guard('web')->check(), Auth::guard('web')->user());
        if ((int)Auth::guard('web')->user()->role !== User::ROLE_ADMIN) {
            abort(404);
        }

        return $next($request);
    }
}
