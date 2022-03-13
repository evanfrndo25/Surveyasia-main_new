<?php

namespace App\Action;

use App\Models\UsersProfile;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PersonalDataRequest;

class CreatePersonalDataAction
{
    public function execute(PersonalDataRequest $request)
    {
        # code...
        $data = $request->validated();

        $profile = [
            'user_id' => $request->user()->id,
            'nama_lengkap' => $data['nama_lengkap'],
            'nik' => $data['nik'],
            'gender' => $data['gender'],
            'birth_place' => $data['birth_place'],
            'birth_date' => $data['birth_date'],
            // 'image_ktp' => $data['image_ktp']->store('image_ktp', 'public'),
            'ktp_province' => $data['ktp_province'],
            'ktp_city' => $data['ktp_city'],
            'ktp_district' => $data['ktp_district'],
            'ktp_postal_code' => $data['ktp_postal_code'],
            'ktp_address' => $data['ktp_address'],
            'job' => $data['job'],
            'job_location' => $data['job_location'],
        ];

        // handle image
        if ($request->File('image_ktp')) {
            $image = $request->file('image_ktp');
            $profile['image_ktp'] = $data['image_ktp']->store('image_ktp', 'public');
            $image->image_ktp = $profile['image_ktp'];
        }
        // save database

        // $file = $request->file('image_ktp')->store('image_ktp', 'public');
        // $user = $request->user()->id;

        // $user->ktp = $file;

        // check if current address is similar to ktp addresses
        if (
            array_key_exists('similar_address', $data) &&
            !array_key_exists('province', $data) ||
            !array_key_exists('city', $data) ||
            !array_key_exists('district', $data) ||
            !array_key_exists('postal_code', $data) ||
            !array_key_exists('address', $data)
        ) {
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
