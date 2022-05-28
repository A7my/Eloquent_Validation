<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title'=>'required|unique:posts|max:10|email',
            'body' =>'required|min:50'
        ];
    }

    public function messages(){
        return [
            'title.required' => "يرجي ادخال العنوان",
            'title.unique' => "فيه واحد زيه",
            'title.email' => "دخل ميل",
            'title.max' => "اخرك 10",
            'body.required' => "دحل البوست يا حلاوة",
            'body.min' => "بحبحها شوية  اقل حاجه 50"
        ];
    }
}
