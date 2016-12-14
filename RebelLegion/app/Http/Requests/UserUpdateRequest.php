<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Input;


class UserUpdateRequest extends FormRequest
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
          'userName' => 'required|string',
          'firstName' => 'required|string',
          'lastName' => 'required|string',
          'email' => 'required|email|unique:email,' . Input::get('email') . ',email',
          'password' => 'required|alhpa_dash|min:6',
          'passwordConfirmation' => 'required|same:password'
        ];
    }
}
