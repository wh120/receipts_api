<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateItemMainCategoryRequest extends FormRequest
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
            'name' => [ 'max:255','required' , Rule::unique('item_main_categories')->ignore($id)] ,
            'code' => [ 'max:255','required' , Rule::unique('item_main_categories')->ignore($id)] ,
        ];
    }
}
