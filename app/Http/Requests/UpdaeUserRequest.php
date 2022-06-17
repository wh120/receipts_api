<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdaeUserRequest extends FormRequest
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
        $id=$this->route() != null?  $this->route()->parameter(explode('.',$this->route()->getName())[0]) :null;

        return [
            'name' => 'required|string|max:255',

            'email' => [ 'max:255', 'email','required' , Rule::unique('users')->ignore($id)] ,
            'password' => 'nullable |string|max:255|min:6',
            'roles' => ['array' , 'nullable'],
            'roles.*.id' => [  'required' , 'exists:roles,id'],
        ];
    }
}
