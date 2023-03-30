<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourtRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:3',
            'address'=>'required|max:200',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'sorry, This field is required',
            'name.min'=>'sorry, at least enter 3 characters.',
            
            'address.required'=>'This field is required',
            'address.max'=>'maximum 200 characters.',
            
        ];
    }
}
