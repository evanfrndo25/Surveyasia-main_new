<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ([
            'nama_lengkap' => ['required', 'regex:/^[a-zA-ZÑñ\s]+$/', 'max:25'],
            'nik' => ['required', 'numeric', 'digits:16'],
            'image_ktp' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2000'],
            'gender' => ['required'],
            'birth_place' => ['required', 'regex:/^[a-zA-ZÑñ\s]+$/', 'max:50'],
            'birth_date' => ['required', 'date', 'before:-17 years'],
            'ktp_province' => ['required', 'string', 'max:50'],
            'ktp_city' => ['required', 'string', 'max:50'],
            'ktp_district' => ['required', 'string', 'max:50'],
            'ktp_postal_code' => ['required', 'numeric', 'digits:5'],
            'ktp_address' => ['required', 'max:255'],
            'job' => ['required', 'regex:/^[a-zA-ZÑñ\s]+$/'],
            'job_location' => ['required', 'string', 'max:250'],


        ]);
    }

    /* if (array_key_exists('similar_address', $data) && !$data['similar_address'] == 'checked') {
            $rules['province'] = ['required', 'string', 'max:50'];
            $rules['city'] = ['required', 'string', 'max:50'];
            $rules['district'] = ['required', 'max:50'];
            $rules['postal_code'] = ['required', 'numeric'];
            $rules['address'] = ['required', 'max:255'];
        } */

    public function messages()
    {
        return [
            'nama_lengkap.regex' => 'Nama Lengkap hanya boleh berisi huruf.',
            'birth_place.regex' => 'Tempat Lahir hanya boleh berisi huruf.',
            'job.regex' => 'Pekerjaan hanya boleh berisi huruf.',
            'birth_date.before' => 'Anda harus berusia 17 tahun ke atas.',
            'image_ktp' => 'Foto KTP harus berupa gambar.',
        ];
    }
}
