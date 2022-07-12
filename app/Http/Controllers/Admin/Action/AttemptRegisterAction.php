<?php

namespace App\Http\Controllers\Admin\Action;

use App\Http\Requests\AdminRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AttemptRegisterAction
{
    public function execute(AdminRegisterRequest $request)
    {
        # code...
        //dd($request->passcode != env('ADMIN_PASSCODE', ''));
        if ($request->passcode != env('ADMIN_PASSCODE', '')) {
            $request->session()->flash('register_error_passcode', 'Wrong passcode');
            return redirect()->back()->withInput();
        }


        $admin = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'role_id' => 1
            ]
        );

        if (!$admin) {
            abort(500, 'Internal Error');
        }

        $request->session()->flash('register_success', 'Registrasi berhasil');

        return redirect()->to('/admin-login');
    }
}
