<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required |string|max:255|min:6',
            'roles' => ['array' , 'nullable'],
            'roles.*.id' => [  'required' , 'exists:roles,id'],

        ];
    }
}
