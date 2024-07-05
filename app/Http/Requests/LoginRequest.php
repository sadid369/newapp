<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','alpha','min:3','max:15'],
            'email'=>['required','email'],
            'password'=>['required'],
        ];
    }

   public function messages()  {
        return [
            'name.required'=>'User Name is Required',
            'name.alpha'=>'User Name must in Alphabet or Character [A-Z or a-z]',
            'email.email'=>"This email is not valid email"
        ];
    }
}
