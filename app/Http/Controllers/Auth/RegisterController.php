<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use App\Models\UsersProfile;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facade;
use App\Http\Controllers\Controller;
use App\Models\CategorySubcriptions;
use App\Models\Subscription;
use App\Models\UsersSubscriptions;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Session\Store;
use App\Rules\IsValidPassword;
use PDO;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'verification.send';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm($role)
    {
        // handle intended links
        if (Session::has('url.intended')) {
            Session::put('url.intended', Session::get('url.intended'));
        }

        if ($role == 'researcher') {
            Session::put('role', Role::IS_RESEARCHER);
        }
        if ($role == 'respondent') {
            Session::put('role', Role::IS_RESPONDENT);
        }
        return view('auth_my.register', ['role' => $role]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        // check the role of registration
        $this->validator($request->all())->validate();

        //dispatch registration event
        event(new Registered($user = $this->create($request->all(), $request->role)));

        $this->guard()->login($user);

        // registered event listener
        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        // handle intended links
        if (Session::has('url.intended')) {
            Session::put('url.intended', Session::get('url.intended'));
        }

        return redirect()->route($this->redirectTo);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_lengkap' => ['required', 'string', 'regex:/^[a-zA-ZÑñ\s]+$/', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', new isValidPassword()],
            // 'avatar' => ['image', 'mimes:jpg,jpeg,bmp,svg,png', 'max:5000'],
            'role' => ['required']
        ],[
            'nama_lengkap.regex'=>'Nama Lengkap hanya boleh berisi huruf.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @param int $role
     * @return \App\Models\User
     */
    protected function create(array $data, $role)
    {
        $user = User::create([
            'nama_lengkap' => $data['nama_lengkap'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $role
        ]);

        // assign as free user
        if ($role == Role::IS_RESEARCHER) {
            UsersSubscriptions::create([
                'user_id' => $user->id,
                'subscription_id' => 1,
                'note' => 'New User',
                'category_id' => 1
            ]);
        }


        return $user;


    }
}
