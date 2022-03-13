<?php

namespace App\Http\Controllers\Responden;

use App\Http\Controllers\Controller;
use App\Models\User;

class RespondentValidateController extends Controller
{
    public function showUploadKtp(User $user)
    {
        // dd($user);
        return view('screening.upload-ktp', ['user' => $user]);
    }

    public function showPersonalData(User $user)
    {
        return view('screening.personal-data', ['user' => $user]);
    }
}
