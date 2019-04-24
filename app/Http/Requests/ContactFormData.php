<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormData extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10|numeric',
            'msg' => 'required|min:20|max:255'
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'Please Enter Your Name',
            'name.min'  => 'Please Enter the name atleast 3 character',
            'email.required' => 'Please Enter Your Email',
            'email.email'  => 'Please Enter a Valid Email',
            //'email.unique' => 'Email has already exist. Please Enter another email',
            'phone.required' => 'Please Enter Your Phone Number',
            'phone.min'  => 'Please Enter min 10 digit phone number',
            'phone.max'  => 'Please Enter max 10 digit Phone Number',
            'phone.numeric'  => 'Please Enter a Valid Phone Number',
            'msg.required'  => 'Please Write Your Query',
            'msg.min'  => 'Please Write Your Query in atleast 20 character minimum ',
            'msg.max'  => 'Message Field not contain more then 255 character ',
            //'msg.alpha_num'  => 'Used Only Alpha Numeric Word',
        ];
    }


}
