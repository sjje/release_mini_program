<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterComponent extends FormRequest
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
            'name' => 'required|max:45',
            'desc' => 'required|max:45',
            'app_id' => 'required|min:10|max:32|unique:component',
            'app_secret' => 'required|string|size:32',
            'verify_token' => 'required|string|min:1|max:45',
            'aes_key' => 'required|string|size:43',
            'validate.filename' => 'required|max:45',
            'validate.content' => 'required|max:45',
        ];
    }

    public function a()
    {

    }
}
