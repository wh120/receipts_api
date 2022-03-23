<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends BaseRequest
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
            'name' => 'required|unique:items|max:255',
            'code' => 'required|unique:items|max:255',
            'description'=>'nullable',
            'unit'=>'required|max:255',
            'is_default_unit'=> 'boolean',
            'item_category_id' =>'required|exists:item_categories,id|integer',

        ];
    }
}
