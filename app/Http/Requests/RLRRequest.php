<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RLRRequest extends FormRequest
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
           'user.name' => 'required|',
           'user.student_num' => 'required|numeric',
           'user.mail'=>'required|email',
           'user.major'=>'required',
           'user.professor' =>'required',
           'user.password' => 'required|confirmed',
          // 'password_confirmation' => 'required',
        ];
    }
}
