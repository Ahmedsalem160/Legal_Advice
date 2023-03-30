<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'username'=>'required|min:3',
            'fullname'=>'required|min:3',
            'address'=>'required',
            'phone'=>'required|min:11',
            'nation_id'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'photo'=>'mimes:jpg,jpeg,png',
        ];
    }


    public function messages()
    {
        return [
            'username.required'=>'sorry, This field is required',
            'username.min'=>'at least 3 characters',
            'fullname.required'=>'This field is required',
            'fullname.min'=>'at least 3 characters',
            'phone.required'=>'This field is required',
            'phone.min'=>'at least 11 numbers',
            'address.required'=>'This field is required',
            'nation_id.required'=>'This field is required',
            'email.required'=>'This field is required',
            'email.email'=>'example@example.com',
            'password.required'=>'This field is required',
            'password.min'=>'at least 6 characters',
            'photo.mimes'=>'this extention not Accepted the image can just be:-(jpg, jpeg, png)',
        ];
    }
}
