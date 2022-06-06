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


            'items' => ['array' ,'min:0'],
            'items.*.value' => ['integer' ,'required' , 'min:0'],
            'items.*.isInput' => ['boolean' ,'required' ],
            'items.*.id' => ['integer' ,'required' ],

            'inputs' => ['array' ,'min:1'],
            'inputs.*.value' => ['integer' ,'required' , 'min:1'],
            'inputs.*.id' => ['integer' ,'required' ],

            'outputs' => ['array' ,'min:1'],
            'outputs.*.value' => ['integer' ,'required' , 'min:1'],
            'outputs.*.id' => ['integer' ,'required' ],

        ];
    }
}
