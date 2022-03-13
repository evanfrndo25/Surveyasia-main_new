<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthGate
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
        $user = Auth::user();

        if ($user) {
            $roles = Role::with('permissions')->get();
            $permissions = [];

            foreach ($roles as $role) {
                # code...
                foreach ($role->permissions as $permission) {
                    # code...
                    $permission[$permission->name][] = $role->id;
                }
            }

            foreach ($permissions as $name => $currRoles) {
                # code...
                Gate::define($name, function ($user) use ($currRoles) {
                    return count(array_intersect($user->roles->pluck('id')->to_array(), $currRoles)) > 0;
                });
            }
        }
        return $next($request);
    }
}
