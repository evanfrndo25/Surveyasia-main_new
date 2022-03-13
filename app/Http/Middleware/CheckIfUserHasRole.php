<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIfUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = $request->user();

        if ($role == 'admin') {
            $role = Role::IS_ADMIN;
        } elseif ($role == 'researcher') {
            $role = Role::IS_RESEARCHER;
        } elseif ($role == 'respondent') {
            $role = Role::IS_RESPONDENT;
        } else {
            abort(404, 'Role not specified or not found');
        }

        if (!$user->hasRole($user, $role)) {
            //not allowed
            abort(403, 'Unauthorized');
        }

        //allowed
        return $next($request);
    }
}
