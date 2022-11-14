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
//            'receipt_number' => 'nullable',
            'must_approved_by_role_id' =>['integer' , 'nullable' , 'exists:roles,id'  ],
            'from_department_id' =>['integer'  ,'nullable', 'exists:departments,id'  ],
            'to_department_id' =>['integer'  ,'required', 'exists:departments,id'  ],
            'receipt_type_id' => ['integer' , ' required' , 'exists:receipt_types,id'],
            'description' => ['nullable' , 'string'],
            'items' => ['array' ,'min:0'],
            'items.*.id' => ['integer' ,'required'],

            'items.*.value0' => ['numeric'  , 'min:0'],
            'items.*.value1' => ['numeric'   , 'min:0'],
            'items.*.value2' => ['numeric'   , 'min:0'],



        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->query('must_approved_by_role_id') == 2) {
                $validator->errors()->add('field', 'Something is wrong with this field!');
            }
        });
    }
}
