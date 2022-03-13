<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'first_name' =>  ['required', 'string', 'max:255'],
            // 'last_name' => ['required', 'string', 'max:255',],
            // 'username' => ['required', 'string', 'max:255'],
            // 'username' => 'max:255|required',
            // 'telp' => 'digits_between:10,12',
            // 'job' => '',
            // 'email' => 'max:255|email:dns|required'
        ];
    }
}
