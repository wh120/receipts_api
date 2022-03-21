<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends BaseRequest
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
        $id=$this->route() != null?  $this->route()->parameter(explode('.',$this->route()->getName())[0]) :null;


        return [
            'name' => [ 'max:255','required' , Rule::unique('roles')->ignore($id)] ,
            'department_id'=> 'required|exists:departments,id|integer'
        ];
    }
}
