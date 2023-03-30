<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IssueRequest extends FormRequest
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
        // return [
        //     'name'=>'required|min:3',
        //     'type'=>'required|min:3',
        //     'description'=>'required',
        //     'judgment'=>'required|min:3',
        //     'client_id'=>'required',
        // ];
    }

    public function messages()
    {
        // return [
        //     'name.required'=>'This field is required',
        //     'type.required'=>'This field is required',
        //     'description.required'=>'This field is required',
        //     'judgment.required'=>'This field is required',
        //     'client_id.required'=>'This field is required',
        // ];
    }
}
