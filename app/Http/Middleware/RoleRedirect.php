<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleRedirect
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
        if (!Auth::check()) {
            return $next($request);
        }

        $user = Auth::user();
        if ($user->role_id == Role::IS_RESEARCHER) {
            return redirect('researcher/surveys');
        } elseif ($user->role_id == Role::IS_RESPONDENT) {
            if ($user->profile == null) {
                return redirect()->route('respondent.validate.personal', $user->id);
            } else {
                return redirect('respondent/dashboard');
            }
        } elseif ($user->role_id == null) {
            return redirect()->route('user.pick-role'); // should choose role
        } else {
            return $next($request);
        }
    }
}
