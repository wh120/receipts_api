<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReceiptRequest extends FormRequest
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
            'receipt_number' => 'nullable',
            'must_approved_by_role_id' =>['integer' , 'nullable' , 'exists:roles,id'  ],
            'receipt_type_id' => ['integer' , ' required' , 'exists:receipt_types,id'],
            'description' => ['nullable' , 'string'],
            'items' => ['array' ,'min:1'],
            'items.*.id' => ['integer' ,'required'],
            'items.*.value' => ['integer' ,'required'],

        ];
    }
}
