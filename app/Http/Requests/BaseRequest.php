<?php

namespace App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{

    protected function failedValidation(Validator $validator) {
        $c = new Controller();
        throw new HttpResponseException(
            $c->validationError( $validator->errors())
        );
    }

    public function messages()
    {
        return [
         //   '*.required' => 'A title is required',
         //   'body.required' => 'A message is required',
        ];
    }
}
