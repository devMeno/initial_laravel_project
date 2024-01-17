<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
            'firstName'=>['required','min:3'],
            'lastName'=>['required','min:3'],
            'age'=>['required','integer','min:3'],
            'sex'=>['required'],
            'class'=>['required','min:2'],
            'stud'=>['boolean'],
        ];
    }
}
