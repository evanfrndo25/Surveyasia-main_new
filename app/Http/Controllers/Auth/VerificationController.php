<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Access\AuthorizationException;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = 'login';

    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:1,2')->only('verify');
        $this->middleware('throttle:1,10')->only('resend');
    }


    /**
     * Show the email verification notice.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail() ? redirect('/') :
            view('auth_my.unverified');
    }

    /**
     * Send email verify and show notice (not secure)
     * @param int $id - User ID
     * @return \Illuminate\Contracts\View\View - Notice View
     */
    public function send()
    {
        # code...
        abort_if(!Auth::check(), 403, 'User not logged in');
        $user = Auth::user();

        // handle intended links
        if (Session::has('url.intended')) {
            Session::put('url.intended', Session::get('url.intended'));
        }

        if ($user->email_verified_at != null) {
            # code...
            return redirect('login')->with('verification.error', 'Email already verified');
        }
        // $user->sendEmailVerificationNotification();
        Session::flash('verification.send', 'Verification Sent');
        return view('auth.verify');
    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {
        $user = User::select(['id', 'email', 'email_verified_at'])
            ->where(['id' => $request->route('id')])->first();

        // dd(hash_equals((string) $request->route('id'), (string) $user->getKey()));

        if (!hash_equals((string) $request->route('id'), (string) $user->getKey())) {
            throw new AuthorizationException;
        }

        if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            throw new AuthorizationException;
        }


        if ($user->hasVerifiedEmail()) {
            return $request->wantsJson()
                ? new JsonResponse([], 204)
                : redirect($this->redirectPath());
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        if ($response = $this->verified($request)) {
            return $response;
        }

        // handle intended links
        if (Session::has('url.intended')) {
            return redirect()->intended($this->redirectPath());
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect($this->redirectPath())->with('verified', true);
    }

    /**
     * The user has been verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function verified(Request $request)
    {
        //
        if ($request->user()->role_id == Role::IS_RESPONDENT && $request->user()->profile == null) {
            // respondent validate
            $this->redirectTo = 'respondent.validate.personal';
            return redirect()->route($this->redirectTo, $request->user()->id);
        }

        // dashboard
        $this->redirectTo = '';
        return redirect($this->redirectTo);
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function resend(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
        } else {
            $user = User::where(['id' => $request->id])->first();
        }


        if ($user->email_verified_at != null && $user->hasVerifiedEmail()) {
            return $request->wantsJson()
                ? new JsonResponse([], 204)
                : redirect($this->redirectPath());
        }

        $user->sendEmailVerificationNotification();

        return $request->wantsJson()
            ? new JsonResponse([], 202)
            : back()->with('resent', true);

        return back()->with('status', 'verification-link-sent');
    }

    /**
     * Force user to logout in case it gets stuck
     */
    public function forceLogout(Request $request)
    {
        # code...
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
