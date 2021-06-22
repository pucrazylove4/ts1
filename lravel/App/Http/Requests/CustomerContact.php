<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerContact extends FormRequest
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
            //
            // 'name' =>'required|min:3|max:30',
            // 'email' =>'required|email',
            // 'birth' =>'required|date_format:d/m/Y',
            // 'address' =>'required|max:255'
           
        ];
        
    }
    public function message()
    {
        return[
            // 'name.required' => 'Bắt buộc',
            // 'email.required' =>'Bắt buộc',
            // 'birth.required' =>'Bắt buộc',
            // 'address.required' =>'Bắt buộc'  
        ];
    }
    public function withValidator($validator)
{
    // $validator->after(function ($validator) {
    //     if ($this->somethingElseIsInvalid()) {
    //         $validator->errors()->add('field', 'Lỗi!');
    //     }
    // });
}
}
