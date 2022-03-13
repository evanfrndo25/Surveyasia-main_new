<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        /* if (!$request->expectsJson()) {
            return route('login');
        } */

        if (!Auth::check()) {
            return redirect('/admin-login')->with('error', 'Login required!');
        }


        if (Auth::check() && Auth::user()->role_id == Role::IS_ADMIN) {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
