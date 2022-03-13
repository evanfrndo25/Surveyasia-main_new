<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

class ShouldVerifyProfile
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
        if ($request->user()->role_id == Role::IS_RESPONDENT && $request->user()->profile == null) {
            return redirect()->route('respondent.validate.personal', $request->user()->id);
        } else {
            return $next($request);
        }
    }
}
