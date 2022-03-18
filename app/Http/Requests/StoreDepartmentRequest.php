<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentRequest extends BaseRequest
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
//            'image'  =>  'nullable|required_without:video|exists:images,url',
//            'video' => 'nullable|required_without:image',
//            'year' => 'nullable',
              'name' => 'required|unique:departments|max:255',
//            'description' => 'nullable',
//            'grade_id' => 'required|exists:grades,id',
           // 'status' => ['nullable', new ValidateIndex('course_status') ],

        ];
    }
}
