<?php

namespace App\Http\Controllers\Respondent\Validate;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use App\Action\CreatePersonalDataAction;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PersonalDataRequest;
use App\Models\UsersProfile;
use App\Action\ReRegistPersonalDataAction;

class ValidationController extends Controller
{
    //
    public function scan(User $user, Request $request)
    {
        # code...
        // check if previous URL is from share link
        $fromShareLink = Str::contains(URL::previous(), route('home') . 'survey');
        if ($fromShareLink) {
            // set intended URL to share link
            Redirect::setIntendedUrl(URL::previous());
        }

        // handle intended links
        if (Session::has('url.intended')) {
            Session::put('url.intended', Session::get('url.intended'));
        }
        return view('screening.upload-ktp', compact('user'));
    }

    public function personal(User $user, Request $request)
    {
        # code...
        return view('screening.personal-data', compact('user'));
    }

    public function save(PersonalDataRequest $request)
    {
        # code...
        $action = new CreatePersonalDataAction;
        if (!$action->execute($request)) {
            return redirect()->back()->withErrors('Something wrong');
        }
        return redirect()->route('respondent.dashboard')->with('validate.success', 'Validation Success!');
    }

    public function accept(User $user, Request $request)
    {
        return view('respondent.validasi.accept', compact('user'));
    }

    public function pending(User $user, Request $request)
    {
        return view('respondent.validasi.pending', compact('user'));
    }

    public function failed(User $user, Request $request)
    {
        return view('respondent.validasi.failed', compact('user'));
    }

    public function reRegistration()
    {
        //Registrasi ulang hanya untuk user yang verifikasinya ditolak
        if (auth()->user()->status != 3) {
            abort(403);
        }


        return view('screening.re-registration');
    }

    public function saveReRegistration(PersonalDataRequest $request)
    {
        $action = new ReRegistPersonalDataAction;
        if (!$action->execute($request)) {
            return redirect()->back()->withErrors('Something wrong');
        }
        return redirect('/')->with('message', 'Anda berhasil registrasi ulang data.');
    }
}
