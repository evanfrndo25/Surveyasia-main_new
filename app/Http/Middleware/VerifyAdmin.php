<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class VerifyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role_id == Role::IS_RESPONDENT && $request->user()->status == 1) {
            return redirect()->route('respondent.validate.pending', $request->user()->id);
        } elseif ($request->user()->role_id == Role::IS_RESPONDENT && $request->user()->status == 2) {
            return redirect()->route('respondent.validate.accept', $request->user()->id);
        } elseif ($request->user()->role_id == Role::IS_RESPONDENT && $request->user()->status == 3) {
            return redirect()->route('respondent.validate.failed', $request->user()->id);
        } else {
            return $next($request);
        }
    }
}
