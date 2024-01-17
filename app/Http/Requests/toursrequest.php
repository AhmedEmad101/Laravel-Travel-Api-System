<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class toursrequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return ['Travel_ID'=>['required','integer'],
            'Name' => 'required',
            'StartingDate'=>'required',
            'EndingDate'=>'required',
            'Price'=>['required','integer']
        ];
    }
}
