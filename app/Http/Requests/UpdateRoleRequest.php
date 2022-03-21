<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
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
        $ignore='';
        if($this->route() != null){
            $ignore = ',id,'.$this->route()->parameter('Role');
        }



        return [
            'name' => 'required|max:255|unique:roles'.$ignore,
            'department_id'=> 'required|exists:departments,id|integer'
        ];
    }
}
