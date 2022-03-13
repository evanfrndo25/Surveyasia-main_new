<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UsersProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PickRoleActionController extends Controller
{
    /**
     * Show a notice to user
     */
    public function notice()
    {
        # code...
        if (Auth::user()->role_id == Role::IS_RESPONDENT) {
            # code...
            return view('change.researcher-notice');
        }

        return view('change.respondent-notice');
    }

    public function respondent()
    {
        # code...
        abort_if(
            Auth::user()->role_id == null,
            403,
            'No Role Assigned!'
        );

        if (Auth::user()->role_id == Role::IS_RESPONDENT) {
            # code...
            return redirect('/');
        }

        // check if first time
        /* if (Auth::user()->profile == null) {
            # show screening
            return view('researcher.screening.ktp');
        } */

        // Ignore
        Auth::user()->asRespondent();

        return redirect()->to('/')->with('change.success', 'Role changed!');
    }

    public function researcher()
    {
        # code...
        abort_if(
            Auth::user()->role_id == null,
            403,
            'No Role Assigned!'
        );

        if (Auth::user()->role_id == Role::IS_RESEARCHER) {
            # code...
            return redirect('/');
        }

        // ignore
        Auth::user()->asResearcher();

        return redirect()->to('/')->with('change.success', 'Role changed!');
    }

    /* First Time Only */
    public function asRespondent(Request $request)
    {
        # code...

        //validate input
        $this->validatorRespondent($request->all())->validate();

        //create profile
        $profile = $this->createProfile($request->all(), Auth::user()->id);

        //update user data
        Auth::user()->profile_id = $profile->id;

        // ignore
        Auth::user()->save();

        // ignore
        Auth::user()->asRespondent();
        return redirect()->to('/')->with('change.success', 'Role changed!');
    }

    /**
     * Get a validator for an incoming respondent registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatorRespondent(array $data)
    {
        $rules = [
            'nama_lengkap' => ['required', 'string', 'max:25'],
            'nik' => ['required', 'numeric', 'min:16'],
            'gender' => ['required'],
            'birth_place' => ['required', 'string', 'max:50'],
            'birth_date' => ['required'],
            'ktp_province' => ['required', 'string', 'max:50'],
            'ktp_city' => ['required', 'string', 'max:50'],
            'ktp_district' => ['required', 'string', 'max:50'],
            'ktp_postal_code' => ['required', 'numeric','min:5'],
            'ktp_address' => ['required', 'max:255'],
            'job' => ['required', 'string'],
            'job_location' => ['required', 'string', 'max:250'],
        ];

        if (array_key_exists('similar_address', $data) && !$data['similar_address'] == 'checked') {
            $rules['province'] = ['required', 'string', 'max:50'];
            $rules['city'] = ['required', 'string', 'max:50'];
            $rules['district'] = ['required', 'max:50'];
            $rules['postal_code'] = ['required', 'numeric','min:5'];
            $rules['address'] = ['required', 'max:255'];
        }

        return Validator::make($data, $rules);
    }

    /**
     * Create a new user's profile as credentials for respondent.
     *
     * @param  array  $data
     * @param int $userId
     * @return \App\Models\UsersProfile
     */
    protected function createProfile(array $data, $userId)
    {
        # code...
        $profile = [
            'user_id' => $userId,
            'nama_lengkap' => $data['nama_lengkap'],
            'nik' => $data['nik'],
            'gender' => $data['gender'],
            'birth_place' => $data['birth_place'],
            'birth_date' => $data['birth_date'],
            'ktp_province' => $data['ktp_province'],
            'ktp_city' => $data['ktp_city'],
            'ktp_district' => $data['ktp_district'],
            'ktp_postal_code' => $data['ktp_postal_code'],
            'ktp_address' => $data['ktp_address'],
            'job' => $data['job'],
            'job_location' => $data['job_location'],
        ];

        // check if current address is similar to ktp addresses
        if (array_key_exists('similar_address', $data) && $data['similar_address'] == 'checked') {
            $profile['province'] = $profile['ktp_province'];
            $profile['city'] = $profile['ktp_city'];
            $profile['district'] = $profile['ktp_district'];
            $profile['postal_code'] = $profile['ktp_postal_code'];
            $profile['address'] = $profile['ktp_address'];
        } else {
            $profile['province'] = $data['province'];
            $profile['city'] = $data['city'];
            $profile['district'] = $data['district'];
            $profile['postal_code'] = $data['postal_code'];
            $profile['address'] = $data['address'];
        }


        return UsersProfile::create($profile);
    }
}
