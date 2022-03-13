<?php

namespace App\Http\Controllers\Auth;

use PDO;
use Exception;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UsersSubscriptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialAccountController extends Controller
{
    public function redirectToProviders(Request $request, $provider)
    {
        $request->session()->get('role');
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider, Request $request)
    {
        // check if intended URL is from share link
        $fromShareLink = Str::contains(Session::get('url.intended'), 'survey');

        try {
            // $user = Socialite::driver($provider)->userFromToken($token);
            $socialUser = Socialite::driver($provider)->user();

            // if user exists
            $user = User::where('provider_id', '=', $socialUser->id)->first();

            // if user not exists , register the user
            if (!$user) {
                $role = Session::get('role');

                // if the request doesn't include role and intended URL is share link
                // then user is from (collect-respondent)
                if ($role == null && $fromShareLink) {
                    // assign role as respondent
                    $role = Role::IS_RESPONDENT;
                }

                $user = User::create(
                    [
                        'nama_lengkap' => $socialUser->name,
                        'email' => $socialUser->email,
                        'role_id' => $role,
                        'avatar' => $socialUser->getAvatar(),
                        'provider_id' => $socialUser->id,
                        'provider_name' => $provider,
                        'email_verified_at' => now(),
                        // random password
                        'password' => Hash::make(Str::random())
                    ]
                );

                // make free subscription to new user
                if ($role == Role::IS_RESEARCHER) {
                    UsersSubscriptions::create(
                        [
                            'user_id' => $user->id,
                            'subscription_id' => 1,
                            'note' => 'New User',
                            'category_id' => 1
                        ]
                    );
                }
            }

            // log in the user
            Auth::login($user, true);

            // redirect to intended location else to dashboard
            return redirect()->intended('');
        } catch (Exception $e) {
            // log exception
            info($e);
            return redirect()->back();
        }
    }
}
