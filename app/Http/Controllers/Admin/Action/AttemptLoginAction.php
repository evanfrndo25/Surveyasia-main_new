<?php

namespace App\Http\Controllers\Admin\Action;

use App\Http\Requests\AdminLoginRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AttemptLoginAction
{
    public function execute(AdminLoginRequest $request)
    {
        # get user from email
        $user = User::where(['email' => $request->login])
            ->get()->first();

        # jika user tidak ditemukan
        if (empty($user)) {
            return back()->withErrors(['login' => 'Pengguna tidak ditemukan']);
        }

        # jika role user bukan Admin
        if (!empty($user) && $user->role_id != Role::IS_ADMIN) {
            return back()->withErrors(['errors' => 'Unauthorized']);
        }

        # jika data tidak sesuai
        if (!Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
            return back()->withErrors(['password' => 'Password tidak sesuai']);
        }

        $request->session()->regenerate();
        return redirect()->to('admin');
    }
}
