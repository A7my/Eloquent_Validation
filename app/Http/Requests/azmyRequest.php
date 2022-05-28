<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class azmyRequest extends FormRequest
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


    public function rules()
    {
        return [
            'text1' => 'required|max:30|min:4',
            'text2' => 'required|max:30|min:4'

        ];
    }

    public function messages(){
        return[
        'text1.required' => "يرجي ادخال الحقل",
        'text2.required' => "يرجي ادخال الحقل",
        'text1.max'      => 'ادخل اقل من 30 ',
        'text2.max'      => 'ادخل اقل من 30 ',
        ];
    }
}
