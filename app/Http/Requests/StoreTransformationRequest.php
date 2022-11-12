<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransformationRequest extends FormRequest
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

            'name' => ['string' , ' required'  ],
            'description' => ['nullable' , 'string'],

            'inputs' => ['array' ,'min:1'],
            'inputs.*.id' => ['integer' ,'required' ],
            'inputs.*.value0' => ['numeric' ,'nullable' , 'min:0'],
            'inputs.*.value1' => ['numeric' ,'nullable' , 'min:0'],
            'inputs.*.value2' => ['numeric' ,'nullable' , 'min:0'],


            'outputs' => ['array' ,'min:1'],
            'outputs.*.id' => ['numeric' ,'required' ],
            'outputs.*.value0' => ['numeric' ,'nullable' , 'min:0'],
            'outputs.*.value1' => ['numeric' ,'nullable' , 'min:0'],
            'outputs.*.value2' => ['numeric' ,'nullable' , 'min:0'],



        ];
    }
}
