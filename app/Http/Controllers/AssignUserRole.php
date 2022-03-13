<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\UsersSubscriptions;
use Illuminate\Support\Facades\Auth;

class AssignUserRole extends Controller
{
    //
    public function index()
    {
        # code...
        $user = Auth::user();
        if ($user->role_id != null) {
            return redirect('');
        }

        return view('user.pick-role');
    }

    public function assign(Request $request)
    {
        # code...
        $role = $request->role;
        if ($role == Role::IS_RESEARCHER) {
            // ignore
            Auth::user()->asResearcher();
            if ($role == Role::IS_RESEARCHER) {
                UsersSubscriptions::create([
                    'user_id' => Auth::user()->id,
                    'subscription_id' => 1,
                    'note' => 'New User',
                    'category_id' => 1
                ]);
            }
        } else {
            // Ignore
            Auth::user()->asRespondent();
        }

        return redirect('');
    }
}
