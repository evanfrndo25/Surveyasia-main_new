<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSurveyRequest extends FormRequest
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
        return [
            'title' => ['required', 'string', 'unique:surveys'],
            'description' => ['required', 'string'],
            'user_id' => ['required'],
            'estimate_completion' => ['required'],
            'category_id' => ['required']
        ];
    }
}
